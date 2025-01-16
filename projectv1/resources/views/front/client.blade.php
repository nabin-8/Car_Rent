@extends('front.layout.master')

@section('main_content')
<!-- client section start -->
<div class="client_section layout_padding">
    <div class="container">
       <div id="custom_slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
             <div class="carousel-item active">
                <div class="row">
                   <div class="col-md-12">
                      <h1 class="client_taital">What Says Customers</h1>
                   </div>
                </div>
                <div class="client_section_2">
                   <div class="row">
                      <div class="col-md-6">
                         <div class="client_taital_box">
                            <div class="client_img"><img src="{{asset('uploads/client-img1.png')}}"></div>
                            <h3 class="moark_text">Hannery</h3>
                            <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                         </div>
                         <div class="quick_icon"><img src="{{asset('uploads/quick-icon.png')}}"></div>
                      </div>
                      <div class="col-md-6">
                         <div class="client_taital_box">
                            <div class="client_img"><img src="{{asset('uploads/client-img2.png')}}"></div>
                            <h3 class="moark_text">Channery</h3>
                            <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                         </div>
                         <div class="quick_icon"><img src="{{asset('uploads/quick-icon.png')}}"></div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="carousel-item">
                <div class="row">
                   <div class="col-md-12">
                      <h1 class="client_taital">What Says Customers</h1>
                   </div>
                </div>
                <div class="client_section_2">
                   <div class="row">
                      <div class="col-md-6">
                         <div class="client_taital_box">
                            <div class="client_img"><img src="{{asset('uploads/client-img1.png')}}"></div>
                            <h3 class="moark_text">Hannery</h3>
                            <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                         </div>
                         <div class="quick_icon"><img src="{{asset('uploads/quick-icon.png')}}"></div>
                      </div>
                      <div class="col-md-6">
                         <div class="client_taital_box">
                            <div class="client_img"><img src="{{asset('uploads/client-img2.png')}}"></div>
                            <h3 class="moark_text">Channery</h3>
                            <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                         </div>
                         <div class="quick_icon"><img src="{{asset('uploads/quick-icon.png')}}"></div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="carousel-item">
                <div class="row">
                   <div class="col-md-12">
                      <h1 class="client_taital">What Says Customers</h1>
                   </div>
                </div>
                <div class="client_section_2">
                   <div class="row">
                      <div class="col-md-6">
                         <div class="client_taital_box">
                            <div class="client_img"><img src="{{asset('uploads/client-img1.png')}}"></div>
                            <h3 class="moark_text">Hannery</h3>
                            <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                         </div>
                         <div class="quick_icon"><img src="{{asset('uploads/quick-icon.png')}}"></div>
                      </div>
                      <div class="col-md-6">
                         <div class="client_taital_box">
                            <div class="client_img"><img src="{{asset('uploads/client-img2.png')}}"></div>
                            <h3 class="moark_text">Channery</h3>
                            <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                         </div>
                         <div class="quick_icon"><img src="{{asset('uploads/quick-icon.png')}}"></div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <a class="carousel-control-prev" href="#custom_slider" role="button" data-slide="prev">
          <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control-next" href="#custom_slider" role="button" data-slide="next">
          <i class="fa fa-angle-right"></i>
          </a>
       </div>
    </div>
 </div>
 <!-- client section end -->
@endsection