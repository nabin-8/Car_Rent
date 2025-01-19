@extends('front.layout.master')

@section('main_content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mt-5 mb-5">
            <h1 class="mb-4">Book Car: {{ $car->name }}</h1>
            <form method="post" action="{{ route('booking.submit') }}" enctype="multipart/form-data">
                @csrf
                <input name="car_id" type="hidden" value="{{ $car->id }}">
                <input name="user_id" type="hidden" value="{{ Auth::guard('web')->user()->id }}">
                <input name="amount" type="hidden" value="@if($car->discounted_price != ''){{$car->discounted_price}}@else{{$car->price_per_day}}@endif">
                <div class="mb-3">
                    <label class="form-label">Pickup Date *</label>
                    <input type="date" class="form-control" id="pickup_date" name="pickup_date" min="{{ date('Y-m-d') }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Drop Date *</label>
                    <input type="date" class="form-control" id="drop_date" name="drop_date" min="{{ date('Y-m-d') }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">License Number *</label>
                    <input type="text" class="form-control" name="license_number" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">License Photo *</label>
                    <input type="file" class="form-control" name="license_photo" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">City *</label>
                    <select class="form-select custom-select-scroll" name="city_id" required>
                        <option value="">-- Select Cities --</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Total Days *</label>
                    <input value="" type="text" class="form-control" id="total_days_display" disabled>
                    <input type="hidden" id="total_days" name="total_days">
                </div>
                <div class="mb-3">
                    <label class="form-label">Total Amount *</label>
                    <input type="text" class="form-control" id="amount" name="total_amount" disabled>
                </div>
                <button type="submit" class="btn btn-primary">Complete Booking</button>
            </form>
        </div>
        <div class="col-md-4 mt-5 mb-5">
            <h4>Car Details</h4>
            <div class="card mb-4">
                <img src="{{ asset('uploads/'.$car->featured_photo) }}" class="card-img-top" alt="{{ $car->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $car->name }}</h5>
                </div>
            </div>
            <ul class="list-group">
                @php
                    $details = [
                        'Price Per Day' => $car->price_per_day,
                        'Discounted Price' => $car->discounted_price,
                        'Vehicle Type' => $car->vehicle_type,
                        'Company' => $car->company,
                        'Model' => $car->model,
                        'Seats' => $car->seats,
                        'Suitcase' => $car->suitcase,
                    ];
                @endphp

                @foreach ($details as $label => $value)
                    @if (!empty($value))
                        <li class="list-group-item"><strong>{{ $label }}:</strong> {{ $value }}</li>
                    @endif
                @endforeach
                <li class="list-group-item"><strong>Link:</strong> <a style="text-decoration: underline !important;" href="{{ route('car',$car->slug) }}">See More Details</a></li>
            </ul>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        function calculateTotalDaysAndAmount() {
            var pickupDate = new Date($('#pickup_date').val());
            var dropDate = new Date($('#drop_date').val());
            if (pickupDate && dropDate && pickupDate <= dropDate) {
                var timeDifference = dropDate.getTime() - pickupDate.getTime();
                var totalDays = Math.ceil(timeDifference / (1000 * 3600 * 24)) + 1; // Including both pickup and drop days
                var pricePerDay = @if($car->discounted_price != ''){{$car->discounted_price}}@else{{$car->price_per_day}}@endif;
                var totalAmount = totalDays * pricePerDay;

                $('#total_days').val(totalDays);
                $('#amount').val(totalAmount);
                $('#total_days_display').val(totalDays);
            } else {
                $('#total_days').val('');
                $('#amount').val('');
            }
        }

        $('#pickup_date, #drop_date').on('change', calculateTotalDaysAndAmount);
    });
</script>
@endsection