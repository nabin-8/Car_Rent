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
            </li>

            <li class="{{ Request::is('admin/car-category/*') ? 'active' : '' }}"><a class="nav-link"
                href="{{ route('admin_car_category_index') }}"><i class="fas fa-hiking"></i><span>CarCategory</span></a></li>
            <li class="{{ Request::is('admin/city/*') ? 'active' : '' }}"><a class="nav-link"
                href="{{ route('admin_city_index') }}"><i class="fas fa-hiking"></i><span>City</span></a></li>
                
                {{-- <li class="{{ Request::is('admin/package/*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('admin_package_index') }}"><i class="fas fa-box-open"></i>Package</a></li>
                <li class="{{ Request::is('admin/package-type/*') ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('admin_package_type_index') }}"><i
                                        class="fas fa-angle-right"></i>Package Type</a></li>
                <li class="{{ Request::is('admin/package-trip-type/*') ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('admin_package_trip_type_index') }}"><i
                                        class="fas fa-angle-right"></i>Package TripType</a></li>
             <li class="{{ Request::is('admin/destination/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_destination_index') }}"><i class="fas fa-map-marked-alt"></i><span>Destination</span></a></li>
            <li class="{{ Request::is('admin/amenity/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_amenity_index') }}"><i class="fas fa-list-ul"></i><span>Amenity</span></a></li>
            <li class="{{ Request::is('admin/user/*') ? 'active' : '' }}"><a class="nav-link"
                href="{{ route('admin_user_index') }}"><i class="fas fa-user"></i><span>User</span></a></li>

            <li class="{{ Request::is('admin/site-info/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_site_info_index') }}"><i class="fas fa-cog"></i><span>Settings</span></a>
            </li>
            <li class="{{ Request::is('admin/document/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_document_index') }}"><i class="fas fa-file-alt"></i><span>Document</span></a>
            </li>
            <li class="{{ Request::is('admin/term-policy/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_term_policy_index') }}"><i class="fas fa-users"></i><span>Term
                        Policy</span></a>
            </li>
            <li class="{{ Request::is('admin/slider/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_slider_index') }}"><i class="fas fa-sliders-h"></i><span>Slider</span></a>
            </li>

            <li class="{{ Request::is('admin/welcome-item/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_welcome_item_index') }}"><i class="fas fa-angle-right"></i><span>Welcome
                        Item</span></a></li>

            <li class="{{ Request::is('admin/feature/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_feature_index') }}"><i class="fab fa-slack"></i><span>Feature</span></a>
            </li>

            <li class="{{ Request::is('admin/counter-item/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_counter_item_index') }}"><i class="fas fa-angle-right"></i><span>Counter
                        Item</span></a></li>

            <li class="{{ Request::is('admin/testimonial/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_testimonial_index') }}"><i class="fas fa-comment-dots"></i><span>Testimonial</span></a></li>

            <li class="{{ Request::is('admin/why-us/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_why_us_index') }}"><i class="fas fa-angle-right"></i><span>WhyUs</span></a></li>

            <li class="{{ Request::is('admin/team-member/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_team_member_index') }}"><i class="fas fa-users"></i><span>Team
                        Member</span></a></li>

            <li class="{{ Request::is('admin/faq/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_faq_index') }}"><i class="fas fa-question-circle"></i><span>FAQ</span></a></li>

            <li class="{{ Request::is('admin/chat/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_chat_index') }}"><i class="fas fa-comment-alt"></i><span>ChatBot</span></a></li>

            <li
                class="nav-item dropdown {{ Request::is('admin/blog-category/*') || Request::is('admin/blog/*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-blog"></i><span>Blog
                        Section</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/blog-category/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_blog_category_index') }}"><i
                                class="fas fa-angle-right"></i>Category</a></li>
                    <li class="{{ Request::is('admin/blog/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_blog_index') }}"><i class="fas fa-angle-right"></i>Blog</a></li>
                </ul>
            </li>


            <li class="{{ Request::is('admin/review/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_review_index') }}"><i class="fas fa-th-list"></i><span>Reviews</span></a>
            </li> --}}

            {{-- <li class="{{ Request::is('admin/profile') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_profile') }}"><i class="fas fa-user-circle"></i>
                    <span>Profile</span></a></li> --}}

            {{-- <li class=""><a class="nav-link" href="invoice.html"><i class="fas fa-angle-right"></i>
                    <span>Invoice</span></a></li> --}}

        </ul>
    </aside>
</div>
