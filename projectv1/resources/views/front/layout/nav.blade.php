      <!-- header section start -->
      <div class="header_section">
          <div class="container">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <a class="navbar-brand"href="{{ route('home') }}"><img src="{{ asset('uploads/logo.png') }}"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('home') }}">Home</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('about') }}">About</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('services') }}">Services</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('vehicles') }}">Vehicles</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('client') }}">Client</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                          </li>
                          @if (Auth::guard('web')->check())
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('user_dashboard') }}">Dashboard</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                              </li>
                          @else
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('login') }}">Login</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('registration') }}">Register</a>
                              </li>
                          @endif
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                      </form>
                  </div>
              </nav>
          </div>
      </div>
      <!-- header section end -->
      <div class="call_text_main">
          <div class="container">
              <div class="call_taital">
                  <div class="call_text"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span
                              class="padding_left_15">Location</span></a></div>
                  <div class="call_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span
                              class="padding_left_15">(+71) 8522369417</span></a></div>
                  <div class="call_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span
                              class="padding_left_15">demo@gmail.com</span></a></div>
              </div>
          </div>
      </div>
