<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Trator</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
    <link rel="stylesheet" href="{{ asset('dist/css/iziToast.min.css') }}">
      <link rel="stylesheet" href="{{ asset('dist-front/css/front-css.css') }}">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('dist-front/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('dist-front/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('dist-front/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@400;500;600;700;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('dist-front/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
      @include('front.layout.nav')
      @yield('main_content')
      

      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="footeer_logo"><img src="{{ asset('uploads/logo.png') }}"></div>
               </div>
            </div>
            <div class="footer_section_2">
               <div class="row">
                  <div class="col">
                     <h4 class="footer_taital">Subscribe Now</h4>
                     <p class="footer_text">There are many variations of passages of Lorem Ipsum available,</p>
                     <div class="form-group">
                        <textarea class="update_mail" placeholder="Enter Your Email" rows="5" id="comment" name="Enter Your Email"></textarea>
                        <div class="subscribe_bt"><a href="#">Subscribe</a></div>
                     </div>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Information</h4>
                     <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority </p>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Helpful Links</h4>
                     <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority </p>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Invesments</h4>
                     <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority </p>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Contact Us</h4>
                     <div class="location_text"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_15">Location</span></a></div>
                     <div class="location_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_15">(+71) 8522369417</span></a></div>
                     <div class="location_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_15">demo@gmail.com</span></a></div>
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">2025 All Rights Reserved. Design by Hemanta Chand Thakuri</p>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{ asset('dist-front/js/jquery.min.js') }}"></script>
      <script src="{{ asset('dist-front/js/popper.min.js') }}"></script>
      <script src="{{ asset('dist-front/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('dist-front/js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('dist-front/js/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('dist-front/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('dist-front/js/custom.js') }}"></script>
        <script src="{{ asset('dist-front/js/iziToast.min.js') }}"></script>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                iziToast.show({
                    position: 'topRight',
                    color: 'red',
                    message: '{{ $error }}',
                });
            </script>
        @endforeach
    @endif
    @if (session('success'))
        <script>
            iziToast.show({
                position: 'topRight',
                color: 'green',
                message: '{{ session('success') }}',
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            iziToast.show({
                position: 'topRight',
                color: 'red',
                message: '{{ session('error') }}',
            });
        </script>
    @endif
   </body>
</html>