<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin_dashboard') }}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin_dashboard') }}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_dashboard') }}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
            </li><br/>

            <li class="{{ Request::is('admin/car-category/*') ? 'active' : '' }}"><a class="nav-link"
                href="{{ route('admin_car_category_index') }}"><i class="fas fa-th-large"></i><span>CarCategory</span></a></li>

            <li class="{{ Request::is('admin/car/*') ? 'active' : '' }}"><a class="nav-link"
                href="{{ route('admin_car_index') }}"><i class="fas fa-car"></i><span>Car</span></a></li>
                
            <li class="{{ Request::is('admin/city/*') ? 'active' : '' }}"><a class="nav-link"
                href="{{ route('admin_city_index') }}"><i class="fas fa-city"></i><span>City</span></a></li>

        </ul>
    </aside>
</div>
