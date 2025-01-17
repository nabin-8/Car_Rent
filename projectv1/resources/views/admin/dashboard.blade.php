@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-hiking"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Bookings</h4>
                            </div>
                            <div class="card-body">
                                {{$total_bookings}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Destinations</h4>
                            </div>
                            <div class="card-body">
                                {{ $total_destinations }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-box-open"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Packages</h4>
                            </div>
                            <div class="card-body">
                                {{ $total_packages }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-dark">
                            <i class="fas fa-sliders-h"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>sliders</h4>
                            </div>
                            <div class="card-body">
                                {{ $total_slider }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-dark">
                            <i class="fas fa-comment-dots"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Testimonials</h4>
                            </div>
                            <div class="card-body">
                                {{ $total_testimonial }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-dark">
                            <i class="fas fa-box-open"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Package Types</h4>
                            </div>
                            <div class="card-body">
                                {{ $total_package_types }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-dark">
                            <i class="fas fa-blog"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Posts</h4>
                            </div>
                            <div class="card-body">
                                {{ $total_posts }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-dark">
                            <i class="fas fa-comment-alt"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>ChatBot Responses</h4>
                            </div>
                            <div class="card-body">
                                {{ $total_chat_responses }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-dark">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>FAQs</h4>
                            </div>
                            <div class="card-body">
                                {{ $total_faqs }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-dark">
                            <i class="fas fa-blog"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Blog Categories</h4>
                            </div>
                            <div class="card-body">
                                {{ $total_blog_categories }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-dark">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Team Members</h4>
                            </div>
                            <div class="card-body">
                                {{ $total_team_members }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-dark">
                            <i class="fas fa-list-ul"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Amenity's</h4>
                            </div>
                            <div class="card-body">
                                {{ $total_amenities }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
