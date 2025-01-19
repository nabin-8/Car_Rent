@extends('front.layout.master')

@section('main_content')
<div class="container">
    <div class="row">
        <div class="col-md-9 mt-3">
            <h1 class="text-center mb-4">{{ $car->name }}</h1>
            <div class="card mb-4">
                <img src="{{ asset('uploads/'.$car->featured_photo) }}" class="card-img-top" alt="{{ $car->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $car->name }}</h5>
                    <p class="card-text" style="text-align: justify">{{ $car->short_description }}</p>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        @php
                            $details = [
                                'Car Category' => $car->car_category->name,
                                'Price Per Day' => $car->price_per_day,
                                'Discounted Price' => $car->discounted_price,
                                'Vehicle Type' => $car->vehicle_type,
                                'Company' => $car->company,
                                'Model' => $car->model,
                                'Seats' => $car->seats,
                                'Suitcase' => $car->suitcase,
                                'Description' => $car->description,
                            ];
                        @endphp
                        @foreach ($details as $label => $value)
                            @if (!empty($value) && $label == 'Description' )
                                <tr>
                                    <th>{{ $label }}</th>
                                    <td style="text-align: justify">{!! $value !!}</td>
                                </tr>
                            @elseif (!empty($value))
                                <tr>
                                    <th>{{ $label }}</th>
                                    <td>{{ $value }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div>
                @if(Auth::guard('web')->check())
                    <a class="btn btn-primary mb-1" href="{{ route('booking',$car->slug) }}" role="button">Book Now</a>
                @else
                    <a class="btn btn-primary mb-1" href="{{ route('login') }}" role="button">Login to Book</a>
                @endif
            </div>
        </div>
        <div class="col-md-3 mt-5">
            <h4>Recent Cars</h4>
            <ul class="list-group mb-4">
                @foreach($recent_cars as $recent_car)
                    <li class="list-group-item">
                        <a href="{{ route('car', $recent_car->slug) }}">{{ $recent_car->name }}</a>
                    </li>
                @endforeach
            </ul>
            <h4>Car Categories</h4>
            <ul class="list-group">
                @foreach($car_categories as $car_category)
                    @if($car_category->cars->count() > 0)
                        <li class="list-group-item">
                            <a href="">{{ $car_category->name }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection