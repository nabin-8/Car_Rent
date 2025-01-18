@extends('admin.layout.master')
@section('main_content')
    @include('admin.layout.nav')
    @include('admin.layout.sidebar')

    <div class="main-content">
        <section class="section">
            <div class="section-header justify-content-between">
                <h1>Edit Car Category</h1>
                <div class="ml-auto">
                    <a href="{{ route('admin_car_category_index') }}" class="btn btn-primary">View
                        All</a>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="{{ route('admin_car_category_edit_submit',$car_category->id) }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Name *</label>
                                        <input type="text" id="slug_name" class="form-control" name="name"
                                            value="{{ $car_category->name }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Slug *</label>
                                        <input type="text" id="slug" class="form-control" name="slug"
                                            value="{{ $car_category->slug }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"></label>
                                        <button type="submit" class="btn btn-primary">Update</button>
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
