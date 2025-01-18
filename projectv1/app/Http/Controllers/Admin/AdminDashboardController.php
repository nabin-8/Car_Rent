<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    // public function dashboard()
    // {
    //     $total_slider = Slider::count();
    //     $total_testimonial = Testimonial::count();
    //     $total_team_members = TeamMember::count();
    //     $total_posts = Blog::count();
    //     $total_destinations = Destination::count();
    //     $total_packages = Package::count();
    //     $total_chat_responses = BotmanResponse::count();
    //     $total_faqs = Faq::count();
    //     $total_package_types = PackageType::count();
    //     $total_blog_categories = BlogCategory::count();
    //     $total_amenities = Amenity::count();
    //     $total_bookings = Booking::count();

    //     return view('admin.dashboard', compact('total_slider', 'total_testimonial', 'total_team_members', 'total_posts', 'total_destinations', 'total_packages', 'total_chat_responses', 'total_faqs', 'total_package_types', 'total_blog_categories', 'total_amenities', 'total_bookings'));
    // }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
