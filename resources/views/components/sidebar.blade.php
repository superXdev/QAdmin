<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <img src="{{ (setting('logo')) ? '/storage/'.setting('logo') : 'dist/img/logo/logo2.png' }}">
        </div>
        <div class="sidebar-brand-text mx-3">RuangAdmin</div>
    </a>
    <hr class="sidebar-divider my-0">

    <x-nav-link 
        text="Dashboard" 
        icon="tachometer-alt" 
        url="{{ route('dashboard') }}"
        active="{{ request()->routeIs('dashboard') ? ' active' : '' }}"
    />
    
    <hr class="sidebar-divider mb-0">

    <x-nav-link 
        text="Member" 
        icon="users" 
        url="{{ route('member') }}"
        active="{{ request()->routeIs('member') ? ' active' : '' }}"
    />

    <x-nav-link 
        text="Roles" 
        icon="th-list" 
        url="{{ route('roles') }}"
        active="{{ request()->routeIs('roles') ? ' active' : '' }}"
    />

    <hr class="sidebar-divider mb-0">
    
    <x-nav-link 
        text="Settings" 
        icon="cogs" 
        url="{{ route('settings') }}"
        active="{{ request()->routeIs('settings') ? ' active' : '' }}"
    />
</ul>