@extends('admin.layout.master')
@section('main_content')
    @include('admin.layout.nav')
    @include('admin.layout.sidebar')

    <div class="main-content">
        <section class="section">
            <div class="section-header justify-content-between">
                <h1>Users</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="broken table table-bordered" id="example1">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Country</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                            <tr id="txy-head">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    @if ($user->photo != '')
                                                        <img src="{{ asset('uploads/'.$user->photo) }}" alt="{{ $user->first_name}}" class="rounded-circle w_50">
                                                    @else
                                                        <img src="{{ asset('uploads/default.png') }}" alt="{{ $user->first_name}}" class="rounded-circle w_50">
                                                    @endif
                                                </td>
                                                <td>{{ $user->name}}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->country }}</td>
                                                <td>{{ $user->bookings_count }}</td>
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