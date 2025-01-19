<div class="list-group mt-5">
    <a href="{{ route('user_dashboard') }}" class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'user_dashboard' ? 'active' : '' }}">Dashboard</a>
    <a href="{{ route('user_edit') }}" class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'user_edit' ? 'active' : '' }}">Edit Profile</a>
    <a href="{{ route('logout') }}" class="list-group-item list-group-item-action">Logout</a>
</div>