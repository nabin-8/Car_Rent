@extends('admin.layout.master')
@section('main_content')
    @include('admin.layout.nav')
    @include('admin.layout.sidebar')

    <div class="main-content">
        <section class="section">
            <div class="section-header justify-content-between">
                <h1>Bookings</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>Latest Bookings</h4>
                                <div class="table-responsive mb-4">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Booking ID</th>
                                                <th>User</th>
                                                <th>Car</th>
                                                <th>Pickup Date</th>
                                                <th>Drop Date</th>
                                                <th>Total Days</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($latestBookings as $booking)
                                                <tr>
                                                    <td>{{ $booking->id }}</td>
                                                    <td>{{ $booking->user->name }}</td>
                                                    <td>
                                                        <a style="text-decoration: underline !important;" href="{{ route('car',$booking->car->slug) }}">{{ $booking->car->name }}</a>
                                                    </td>
                                                    <td>{{ $booking->pickup_date }}</td>
                                                    <td>{{ $booking->drop_date }}</td>
                                                    <td>{{ $booking->total_days }}</td>
                                                    <td>{{ $booking->amount }}</td>
                                                    <td>{{ ucfirst($booking->status) }}</td>
                                                    <td>{{ $booking->created_at->diffForHumans() }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <h4>All Bookings</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example1">
                                        <thead>
                                            <tr>
                                                <th>Booking ID</th>
                                                <th>User</th>
                                                <th>Car</th>
                                                <th>Pickup Date</th>
                                                <th>Drop Date</th>
                                                <th>Total Days</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bookings as $booking)
                                                <tr>
                                                    <td>{{ $booking->id }}</td>
                                                    <td>{{ $booking->user->name }}</td>
                                                    <td>
                                                        <a style="text-decoration: underline !important;" href="{{ route('car',$booking->car->slug) }}">{{ $booking->car->name }}</a>
                                                    </td>
                                                    <td>{{ $booking->pickup_date }}</td>
                                                    <td>{{ $booking->drop_date }}</td>
                                                    <td>{{ $booking->total_days }}</td>
                                                    <td>{{ $booking->amount }}</td>
                                                    <td>{{ ucfirst($booking->status) }}</td>
                                                    <td>
                                                        <a href="{{ route('admin_booking_view', $booking->id) }}" class="btn btn-primary">View</a>
                                                        <a href="{{ route('admin_booking_approve', $booking->id) }}" class="btn btn-primary">
                                                            @if($booking->status == 'pending')
                                                                <i class="fas fa-check-circle"></i>
                                                            @else
                                                                <i class="fas fa-times-circle"></i>
                                                            @endif
                                                        </a>
                                                        <a href="{{ route('admin_booking_delete', $booking->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
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