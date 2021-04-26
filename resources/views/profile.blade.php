<x-app-layout>
	<x-slot name="title">
		Your Profile
	</x-slot>

	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            	@if (session()->has('success'))
            		<x-alert type="success" message="{{ session()->get('success') }}" />
            	@elseif(session()->has('failed'))
            		<x-alert type="failed" message="{{ session()->get('failed') }}" />
            	@endif
            	
                <x-card>

                	<div class="text-center mb-2">
                		<img src="{{ asset('dist/img/boy.png') }}" width="120" alt="" class="img-profile rounded-circle">
                	</div>

                	<form action="" method="POST">
                		@csrf
                		<x-input type="text" text="Full Name" name="name" value="{{ auth()->user()->name }}" />

	                	<x-input type="password" text="Old Password" name="old_password" />
	                	<x-input type="password" text="New Password" name="new_password" />

	                	<div class="text-center">
	                		<x-button type="primary" text="Update Profile" />
	                	</div>
                	</form>
                </x-card>
            </div>
        </div>
    </div>
</x-app-layout>