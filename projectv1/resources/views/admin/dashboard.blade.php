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
                        <div class="card-icon bg-dark">
                            <i class="fas fa-hiking"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Bookings</h4>
                            </div>
                            <div class="card-body">
                                {{ $total_bookings }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-dark">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>cars</h4>
                            </div>
                            <div class="card-body">
                                {{ $total_cars }}
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
                                <h4>Car Categories</h4>
                            </div>
                            <div class="card-body">
                                {{ $total_car_categories }}
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
                                <h4>Cities</h4>
                            </div>
                            <div class="card-body">
                                {{ $total_cities }}
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
                                <h4>Users</h4>
                            </div>
                            <div class="card-body">
                                {{ $total_users }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
