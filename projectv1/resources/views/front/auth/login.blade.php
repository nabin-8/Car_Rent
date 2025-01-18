@extends('front.layout.master')

@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 mb-5">
                <form action="{{ route('login_submit') }}" method="post">
                    @csrf
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Email</label>
                        <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputPassword4">Password</label>
                        <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                    <div class="mb-5"></div>
                    <div class="col-md-12 mt-5">
                      <h5>Did not have account? <a style="text-decoration: underline !important" href="{{ route('registration') }}">Register</a> </h5>
                  </div>
                  <div class="col-md-12">
                      <button type="submit" class="mb-5 front-btn-auth rounded">Login</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
@endsection
