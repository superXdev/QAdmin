<x-guest-layout>
    <x-slot name="title">
        Login
    </x-slot>

    <x-auth-card>
    
        {{-- show alert if there is errors --}}
        <x-alert-error/>
        
        <x-slot name="title">
            Login
        </x-slot>
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <!-- Email field -->
            <x-input type="text" text="Email" name="email" />

            <!-- Password field -->
            <x-input type="password" text="Password" name="password" />
            
            <x-button type="primary btn-block" text="Login" for="submit" />
        </form>
    </x-auth-card>
</x-guest-layout>
