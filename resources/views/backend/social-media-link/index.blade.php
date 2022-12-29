@extends('backend.layouts.app')

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Social Media Link</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Social Media Link</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    {{-- card start --}}
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Social Media Link</h3>
                </div>
                <form class="card-body" action="{{ route('update.social') }}" method="POST">
                    @csrf
                    <p class="text-muted ms-2">Enter your social Media Link</p>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-2">
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input class="form-control" placeholder="Enter your Facebook Link" type="text" value="{{ $data->facebook }}" name="facebook" id="facebook">
                                </div>
                                <div class="form-group">
                                    <label for="Instagram">Instagram</label>
                                    <input class="form-control" placeholder="Enter your Instagram Link" type="text" value="{{ $data->instagram }}" name="instagram" id="Instagram">
                                </div>
                                <div class="form-group">
                                    <label for="Twitter">Twitter</label>
                                    <input class="form-control" placeholder="Enter your Twitter Link" type="text" value="{{ $data->twitter }}" name="twitter" id="Twitter">
                                </div>
                                <div class="form-group">
                                    <label for="TikTok">TikTok</label>
                                    <input class="form-control" placeholder="Enter your TikTok Link" type="text" value="{{ $data->tiktok }}" name="tiktok" id="TikTok">
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
