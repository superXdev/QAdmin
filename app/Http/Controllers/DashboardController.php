<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Activitylog\Models\Activity;

class DashboardController extends Controller
{
    public function index()
    {
        $logs = Activity::latest()->limit(5)->get();

        if(!auth()->user()->is_admin) {
            $logs = Activity::where('causer_id', auth()->id())->limit(5);
        } 

        return view('dashboard', compact('logs'));
    }
	/**
	* Store settings into database
	*
	* @param $request
	*/
    public function settings_store(Request $request)
    {
    	// when you upload a logo image
    	if($request->file('logo')) {
	    	$filename = $request->file('logo')->getClientOriginalName();
	    	$filePath = $request->file('logo')->storeAs('uploads', $filename, 'public');
	    	setting()->set('logo', $filePath);
    	}

    	setting()->set('site_name', $request->site_name);
    	setting()->set('keyword', $request->keyword);
    	setting()->set('description', $request->description);
    	setting()->set('url', $request->url);

    	// save all
    	setting()->save();
    	return redirect()->back();
    }

    /**
    * Update profile user
    *
    * @param $request
    */
    public function profile_update(Request $request)
    {
        $data = ['name' => $request->name];

        // if password want to change
        if($request->old_password && $request->new_password) {
            // verify if password is match
            if(!Hash::check($request->old_password, auth()->user()->password)) {
                session()->flash('failed', 'Password is wrong!');
                return redirect()->back();
            }

            $data['password'] = Hash::make($request->new_password);
        } 

        // for update avatar
        if($request->avatar) {
            $data['avatar'] = $request->avatar;

            if(auth()->user()->avatar) {
                unlink(storage_path('app/public/'.auth()->user()->avatar));
            }
        }
        
        // update profile
        auth()->user()->update($data);
        

        session()->flash('success', 'Profile updated!');
        return redirect()->back();
    }

    public function upload_avatar(Request $request)
    {
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');

            $fileName = $file->getClientOriginalName();
            $folder = 'user-'.auth()->id();

            $file->storeAs('avatars/'.$folder, $fileName, 'public');

            return 'avatars/'.$folder.'/'.$fileName;
        }

        return '';
        
    }
}
