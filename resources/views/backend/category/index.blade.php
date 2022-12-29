@extends('backend.layouts.app')

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Create Category</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Category</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    {{-- card start --}}
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Create Category</h3>
                </div>
                <form id="myForm" class="card-body" action="{{ route('store.category') }}" method="POST">
                    @csrf
                    <p class="text-muted ms-2">Enter your category name</p>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-2">
                                <div class="form-group">
                                    {{-- <label for="category">Category Name</label> --}}
                                    <input class="form-control" placeholder="Enter your category Link" type="text"
                                        name="category" id="category">


                                </div>
                                <div class="form-group">
                                    <input class="" type="checkbox" name="leftside" id="left-side" value="1">
                                    <label for="left-side">Show Category name in Left Side in Menu</label>
                                </div>
                                <div class="form-group">
                                    <input class="" type="checkbox" name="rightside" id="right-side" value="2">
                                    <label for="rightside">Show Category name in Right Side in Menu</label>
                                    @error('leftside')
                                        <span class="text-danger my-3">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- card end --}}
@endsection
