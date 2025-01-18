@extends('admin.layout.master')
@section('main_content')
    @include('admin.layout.nav')
    @include('admin.layout.sidebar')

    <div class="main-content">
        <section class="section">
            <div class="section-header justify-content-between">
                <h1>Create Car</h1>
                <div class="ml-auto">
                    <a href="{{ route('admin_car_index') }}" class="btn btn-primary"> View All</a>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="{{ route('admin_car_create_submit') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Featured Photo *</label>
                                                <div><input type="file" name="featured_photo"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Name *</label>
                                                <input type="text" class="form-control" id="slug_name" name="name" value="{{ old('name') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Slug *</label>
                                                <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Car Category *</label>
                                                <select class="form-select" name="car_category_id">
                                                    <option value="">-- Select Car Category --</option>
                                                    @foreach ($car_categories as $car_category)
                                                        <option value="{{ $car_category->id }}">{{ $car_category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Price Per Day *</label>
                                                <input type="text" class="form-control" name="price_per_day" value="{{ old('price_per_day') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Discounted Price</label>
                                                <input type="text" class="form-control" name="discounted_price" value="{{ old('discounted_price') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Vehicle Type</label>
                                                <input type="text" class="form-control" name="vehicle_type" value="{{ old('vehicle_type') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Company</label>
                                                <input type="text" class="form-control" name="company" value="{{ old('company') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Model</label>
                                                <input type="text" class="form-control" name="model" value="{{ old('model') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Seats</label>
                                                <input type="text" class="form-control" name="seats" value="{{ old('seats') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Suitcase</label>
                                                <input type="text" class="form-control" name="suitcase" value="{{ old('suitcase') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Short Description</label>
                                        <textarea name="short_description" class="form-control h_100" cols="30" rows="10">{{ old('short_description') }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" class="form-control editor" cols="30" rows="10">{{ old('description') }}</textarea>
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