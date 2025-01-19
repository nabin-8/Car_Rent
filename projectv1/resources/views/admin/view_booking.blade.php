@extends('admin.layout.master')
@section('main_content')
    @include('admin.layout.nav')
    @include('admin.layout.sidebar')

    <div class="main-content">
        <section class="section">
            <div class="section-header justify-content-between">
                <h1>Booking Details</h1>
                <div class="ml-auto">
                    <a href="{{ route('admin_booking_index') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back to Bookings</a>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>Booking Information</h4>
                                <div class="table-responsive mb-4">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Booking ID</th>
                                                <td>{{ $booking->id }}</td>
                                            </tr>
                                            <tr>
                                                <th>User</th>
                                                <td>{{ $booking->user->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Car</th>
                                                <td>{{ $booking->car->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Pickup Date</th>
                                                <td>{{ $booking->pickup_date }}</td>
                                            </tr>
                                            <tr>
                                                <th>Drop Date</th>
                                                <td>{{ $booking->drop_date }}</td>
                                            </tr>
                                            <tr>
                                                <th>Total Days</th>
                                                <td>{{ $booking->total_days }}</td>
                                            </tr>
                                            <tr>
                                                <th>Amount</th>
                                                <td>${{ $booking->amount }}</td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td>{{ ucfirst($booking->status) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Payment Status</th>
                                                <td>{{ ucfirst($booking->payment_status) }}</td>
                                            </tr>
                                            <tr>
                                                <th>License Number</th>
                                                <td>{{ $booking->license_number }}</td>
                                            </tr>
                                            <tr>
                                                <th>License Photo</th>
                                                <td><img style="height: 100px;" src="{{ asset('uploads/'.$booking->license_photo) }}" alt="License Photo" class="img-fluid"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h4>User Information</h4>
                                <div class="table-responsive mb-4">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Name</th>
                                                <td>{{ $booking->user->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{ $booking->user->email }}</td>
                                            </tr>
                                            <tr>
                                                <th>Phone</th>
                                                <td>{{ $booking->user->phone }}</td>
                                            </tr>
                                            <tr>
                                                <th>Country</th>
                                                <td>{{ $booking->user->country }}</td>
                                            </tr>
                                            <tr>
                                                <th>Address</th>
                                                <td>{{ $booking->user->address }}</td>
                                            </tr>
                                            <tr>
                                                <th>State</th>
                                                <td>{{ $booking->user->state }}</td>
                                            </tr>
                                            <tr>
                                                <th>City</th>
                                                <td>{{ $booking->user->city }}</td>
                                            </tr>
                                            <tr>
                                                <th>Zip</th>
                                                <td>{{ $booking->user->zip }}</td>
                                            </tr>
                                            <tr>
                                                <th>Profile</th>
                                                <td>
                                                    <img class="rounded-circle" style="height: 100px;" src="{{ asset('uploads/'.$booking->user->photo) }}" alt="">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h4>Car Information</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Name</th>
                                                <td>{{ $booking->car->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Category</th>
                                                <td>{{ $booking->car->car_category->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Price Per Day</th>
                                                <td>${{ $booking->car->price_per_day }}</td>
                                            </tr>
                                            <tr>
                                                <th>Discounted Price</th>
                                                <td>${{ $booking->car->discounted_price }}</td>
                                            </tr>
                                            <tr>
                                                <th>Vehicle Type</th>
                                                <td>{{ $booking->car->vehicle_type }}</td>
                                            </tr>
                                            <tr>
                                                <th>Company</th>
                                                <td>{{ $booking->car->company }}</td>
                                            </tr>
                                            <tr>
                                                <th>Model</th>
                                                <td>{{ $booking->car->model }}</td>
                                            </tr>
                                            <tr>
                                                <th>Seats</th>
                                                <td>{{ $booking->car->seats }}</td>
                                            </tr>
                                            <tr>
                                                <th>Suitcase</th>
                                                <td>{{ $booking->car->suitcase }}</td>
                                            </tr>
                                            <tr>
                                                <th>Short Description</th>
                                                <td>{{ $booking->car->short_description }}</td>
                                            </tr>
                                            <tr>
                                                <th>Description</th>
                                                <td>{!! $booking->car->description !!}</td>
                                            </tr>
                                            <tr>
                                                <th>Featured Photo</th>
                                                <td><img style="height: 100px;" src="{{ asset('uploads/'.$booking->car->featured_photo) }}" alt="Featured Photo" class="img-fluid"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection