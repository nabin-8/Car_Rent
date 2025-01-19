@extends('front.layout.master')

@section('main_content')
<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-md-3 mt-5">
            @include('user.sidebar')
        </div>
        <div class="col-md-9">
            <h1 class="mb-3 mt-5">My Bookings</h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Booking ID</th>
                            <th>Car</th>
                            <th>Pickup Date</th>
                            <th>Drop Date</th>
                            <th>Total Days</th>
                            <th>Amount</th>
                            <th>Admin Verified</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td>{{ $booking->id }}</td>
                                <td><a style="text-decoration: underline !important;" href="{{ route('car',$booking->car->slug) }}">{{ $booking->car->name }}</a></td>
                                <td>{{ $booking->pickup_date }}</td>
                                <td>{{ $booking->drop_date }}</td>
                                <td>{{ $booking->total_days }}</td>
                                <td>${{ $booking->amount }}</td>
                                <td>{{ ucfirst($booking->status) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection