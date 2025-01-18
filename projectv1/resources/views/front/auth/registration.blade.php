@extends('front.layout.master')

@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 mb-5">
                <form action="{{ route('registration_submit') }}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Name *</label>
                            <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="inputPassword4" placeholder="Full Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email *</label>
                            <input name="email" value="{{ old('email') }}" type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row mt-3 mb-3">
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Address *</label>
                            <input name="address" value="{{ old('address') }}" type="text" class="form-control" id="inputPassword4" placeholder="Address">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Phone *</label>
                            <input name="phone" value="{{ old('phone') }}" type="text" class="form-control" id="inputEmail4" placeholder="Phone">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password *</label>
                            <input name="password" value="{{ old('password') }}" type="text" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Confirm Password *</label>
                            <input name="confirm_password" value="{{ old('confirm_password') }}" type="text" class="form-control" id="inputEmail4" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <h5>Already Register? <a style="text-decoration: underline !important" href="{{ route('login') }}">Login</a> </h5>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="front-btn-auth rounded">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
