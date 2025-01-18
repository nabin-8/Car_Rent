@extends('admin.layout.master')
@section('main_content')
    @include('admin.layout.nav')
    @include('admin.layout.sidebar')

    <div class="main-content">
        <section class="section">
            <div class="section-header justify-content-between">
                <h1>cars</h1>
                <div class="ml-auto">
                    <a href="{{ route('admin_car_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example1">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Featured Photo</th>
                                                <th>Name</th>
                                                <th>CarCategory</th>
                                                <th>Gallery</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cars as $car)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img src="{{ asset('uploads/'.$car->featured_photo) }}" alt="" class="w_100">
                                                </td>
                                                <td>
                                                    {{-- <a href="{{ route('car', $car->slug) }}" target="_blank" class="link-underline-dark text-dark">{{ $car->name }}</a> --}}
                                                    <a href="#" target="_blank" class="link-underline-dark text-dark">{{ $car->name }}</a>
                                                </td>
                                                <td>{{ $car->car_category->name }}</td>
                                                <td>
                                                    {{-- <a href="{{ route('admin_car_photos',$car->id) }}" class="btn btn-success">Photo Gallery</a> --}}
                                                </td>
                                                <td class="pt_10 pb_10">
                                                    <a href="{{ route('admin_car_edit',$car->id) }}" class="btn btn-primary"><i
                                                            class="fas fa-edit"></i></a>
                                                    <a href="{{ route('admin_car_delete',$car->id) }}" class="btn btn-danger"
                                                        onClick="return confirm('Are you sure?');"><i
                                                            class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
