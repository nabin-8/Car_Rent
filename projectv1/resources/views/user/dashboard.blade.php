@extends('front.layout.master')

@section('main_content')
<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-md-3">
            @include('user.sidebar')
        </div>
        <div class="col-md-9">
            <h1 class="mb-3">My Bookings</h1>
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
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dummy data for now -->
                        <tr>
                            <td>1</td>
                            <td>Car A</td>
                            <td>2023-10-01</td>
                            <td>2023-10-05</td>
                            <td>5</td>
                            <td>$500</td>
                            <td>Confirmed</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Car B</td>
                            <td>2023-11-10</td>
                            <td>2023-11-15</td>
                            <td>6</td>
                            <td>$600</td>
                            <td>Pending</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Car C</td>
                            <td>2023-12-20</td>
                            <td>2023-12-25</td>
                            <td>6</td>
                            <td>$600</td>
                            <td>Cancelled</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection