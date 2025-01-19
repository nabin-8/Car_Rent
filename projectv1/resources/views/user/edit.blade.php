@extends('front.layout.master')

@section('main_content')
<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-md-3">
            @include('user.sidebar')
        </div>
        <div class="col-md-9">
            <h1 class="mb-4 mt-3">Edit Profile</h1>
            <form action="{{ route('user_edit_submit') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <img style="height: 80px;" class="rounded-circle mb-2" src="{{ asset('uploads/'.Auth::guard('web')->user()->photo) }}" alt="">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name *</label>
                        <input name="name" value="{{ Auth::guard('web')->user()->name }}" type="text" class="form-control" id="name" placeholder="Full Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email *</label>
                        <input name="email" value="{{ Auth::guard('web')->user()->email }}" type="email" class="form-control" id="email" placeholder="Email" readonly>
                    </div>
                </div>
                <div class="form-row mt-3 mb-3">
                    <div class="form-group col-md-6">
                        <label for="address">Address *</label>
                        <input name="address" value="{{ Auth::guard('web')->user()->address }}" type="text" class="form-control" id="address" placeholder="Address">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Phone *</label>
                        <input name="phone" value="{{ Auth::guard('web')->user()->phone }}" type="text" class="form-control" id="phone" placeholder="Phone">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="country">Country *</label>
                        <input name="country" value="{{ Auth::guard('web')->user()->country }}" type="text" class="form-control" id="country" placeholder="Country">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="state">State *</label>
                        <input name="state" value="{{ Auth::guard('web')->user()->state }}" type="text" class="form-control" id="state" placeholder="State">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="city">City *</label>
                        <input name="city" value="{{ Auth::guard('web')->user()->city }}" type="text" class="form-control" id="city" placeholder="City">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="zip">Zip *</label>
                        <input name="zip" value="{{ Auth::guard('web')->user()->zip }}" type="text" class="form-control" id="zip" placeholder="Zip">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="password">New Password</label>
                        <input name="password" type="password" class="form-control" id="password" placeholder="New Password">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="confirm_password">Confirm New Password</label>
                        <input name="confirm_password" type="password" class="form-control" id="confirm_password" placeholder="Confirm New Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo">Profile Photo</label>
                    <input type="file" class="form-control-file" id="photo" name="photo">
                </div>
                <button type="submit" class="btn btn-primary">Update Profile</button>
            </form>
        </div>
    </div>
</div>
@endsection