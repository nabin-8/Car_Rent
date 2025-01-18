@extends('admin.layout.master')
@section('main_content')
    @include('admin.layout.nav')
    @include('admin.layout.sidebar')

    <div class="main-content">
        <section class="section">
            <div class="section-header justify-content-between">
                <h1>Edit Car: {{ $car->name }}</h1>
                <div class="ml-auto">
                    <a href="{{ route('admin_car_index') }}" class="btn btn-primary">View All</a>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="{{ route('admin_car_edit_submit', $car->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Existing Featured Photo</label>
                                                <div><img src="{{ asset('uploads/'.$car->featured_photo) }}" alt="" class="w_200"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Change Featured Photo *</label>
                                                <div><input type="file" name="featured_photo"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Name *</label>
                                                <input type="text" class="form-control" id="slug_name" name="name" value="{{ $car->name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Slug *</label>
                                                <input type="text" class="form-control" id="slug" name="slug" value="{{ $car->slug }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Car Category *</label>
                                                <select class="form-select" name="car_category_id">
                                                    @foreach ($car_categories as $car_category)
                                                        <option value="{{ $car_category->id }}" @if($car->car_category_id == $car_category->id) selected @endif>{{ $car_category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Price Per Day *</label>
                                                <input type="text" class="form-control" name="price_per_day" value="{{ $car->price_per_day }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Discounted Price</label>
                                                <input type="text" class="form-control" name="discounted_price" value="{{ $car->discounted_price }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Vehicle Type</label>
                                                <input type="text" class="form-control" name="vehicle_type" value="{{ $car->vehicle_type }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Company</label>
                                                <input type="text" class="form-control" name="company" value="{{ $car->company }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Model</label>
                                                <input type="text" class="form-control" name="model" value="{{ $car->model }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Seats</label>
                                                <input type="text" class="form-control" name="seats" value="{{ $car->seats }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Suitcase</label>
                                                <input type="text" class="form-control" name="suitcase" value="{{ $car->suitcase }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Short Description</label>
                                        <textarea name="short_description" class="form-control h-100" cols="30" rows="10">{{ $car->short_description }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" class="form-control editor" cols="30" rows="10">{{ $car->description }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"></label>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection