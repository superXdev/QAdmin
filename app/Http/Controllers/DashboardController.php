<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
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
        $data = [];

        // if password want to change
        if($request->old_password && $request->new_password) {
            // verify if password is match
            if(!Hash::check($request->old_password, auth()->user()->password)) {
                session()->flash('failed', 'Password is wrong!');
                return redirect()->back();
            }
            // update both
            $data = [
                'name' => $request->name,
                'password' => Hash::make($request->new_password)
            ];
        } else {
            // just name
            $data = [
                'name' => $request->name
            ];
        }
        
        // update profile
        auth()->user()->update($data);
        

        session()->flash('success', 'Profile updated!');
        return redirect()->back();
    }
}
