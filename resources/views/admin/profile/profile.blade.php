@extends('backend.layouts.app')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- end jquery script cdn --}}
    <div class="row">
        <div class="page-header">
            <div>
                <h1 class="page-title">User Profile</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </div>
        </div>
        <div class="col-md-12 col-xl-4 pb-5">
            <div class="card pb-3">
                <div class="card-header ">
                    <h3 class="card-title ">User Profile</h3>
                    <div class="card-options">
                        <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                class="fe fe-chevron-up"></i></a>
                    </div>
                </div>
                <div class="card-body text-center">
                    <img class="avatar avatar-xxl brround cover-image cover-image"
                        src="{{ $user->image != null ? asset($user->image) : asset('images/No-Image-Placeholder.svg.png') }}" alt="">
                    <h4 class="h4 mb-0 mt-3">{{ $user->name }}</h4>
                </div>
            </div>
        </div>
        {{-- card end --}}
        <div class="col-lg-8 col-md-">
            <div class="card custom-card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Update User Details</h3>
                </div>
                <form class="card-body" action="{{ route('update.user.data',$user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex flex-column">
                        <div class="form-group">
                            <label for="name">User Name</label>
                            <input class="form-control" id="name" placeholder="Enter your username" type="text"
                                name="name" value="{{ $user->name }}">
                            @error('name')
                                <span class="text-danger my-3">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">User Email</label>
                            <input class="form-control" id="email" placeholder="Enter Your Email" type="email"
                                name="email" value="{{ $user->email }}">
                            @error('email')
                                <span class="text-danger my-3">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="images">User Image</label>
                            <input class="form-control" id="images" type="file" name="image">
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <img id="show_image" src="{{ $user->image != null ? asset($user->image) : asset('images/No-Image-Placeholder.svg.png') }}" alt=""
                                    width="100" style="border-radius: 20%">
                            </div>
                        </div>
                        <button class="btn ripple btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- card end --}}
    </div>
    @push('script')
        <script type="text/javascript">
            $(document).ready(function() {
                $('#images').change(function(e) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#show_image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0'])
                })
            })
        </script>
    @endpush
@endsection
