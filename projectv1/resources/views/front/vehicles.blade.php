@extends('front.layout.master')

@section('main_content')
<!-- gallery section start -->
<div class="gallery_section layout_padding">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <h1 class="gallery_taital">Our best offers</h1>
          </div>
       </div>
       <div class="gallery_section_2">
          <div class="row">
            @foreach ($cars as $car)
            <div class="col-md-4">
               <div class="gallery_box">
                  <div class="gallery_img"><a href="{{ route('car',$car->slug) }}"><img src="{{ asset('uploads/'.$car->featured_photo) }}"></a></div>
                  <h3 class="types_text">{{ $car->name }}</h3>
                    <p class="looking_text">Start per day NRS{{ $car->price_per_day }}</p>
                  <div class="read_bt">
                     @if(Auth::guard('web')->check())
                     <a href="{{ route('booking',$car->slug) }}">Book Now</a>
                     @else
                     <a href="{{ route('login') }}">Login to Book</a>
                     @endif
                  </div>
               </div>
            </div>
            @endforeach
          </div>
       </div>
    </div>
 </div>
 <!-- gallery section end -->
@endsection