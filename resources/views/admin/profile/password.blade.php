@extends('backend.layouts.app')

@section('content')
    <!-- PAGE-HEADER -->
    <div class="row">
        <div class="page-header">
            <div>
                <h1 class="page-title">User Password Update</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Password Update</li>
                </ol>
            </div>
        </div>
        <div class="col-lg-12 col-md-">
            <div class="card custom-card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Update User Password</h3>
                </div>
                <form id="from" class="card-body" action="{{ route('update.user.password',$data->id) }}" method="POST">
                    @csrf
                    <div class="d-flex flex-column">
                        <div class="form-group">
                            <label for="currentPassword">Current Passwor</label>
                            <input class="form-control" id="currentPassword" placeholder="Enter your username" type="password"
                                name="currentPassword">
                            @error('currentPassword')
                                <span class="text-danger my-3">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="newPassword">User New Password</label>
                            <input class="form-control" id="newPassword" placeholder="Enter Your Email" type="password"
                                name="newPassword">
                            @error('newPassword')
                                <span class="text-danger my-3">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">User Confirm Password</label>
                            <input class="form-control" id="confirmPassword" placeholder="Enter Your Email" type="password"
                                name="confirmPassword">
                            @error('confirmPassword')
                                <span class="text-danger my-3">{{ $message }}</span>
                            @enderror
                        </div>
                        <button class="btn ripple btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- card end --}}
    </div>
@endsection