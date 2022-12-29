@extends('backend.layouts.app')

@section('content')
    {{-- jquery start --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- jquery end --}}

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Create Blogs</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Blogs</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    {{-- card start --}}
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Create Blogs</h3>
                </div>
                <form class="card-body" action="{{ route('store.blogs') }}" method="POST" id="from"
                    enctype="multipart/form-data">
                    @csrf
                    <p class="text-muted ms-2">Enter your blogs details</p>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-2">
                                <div class="form-group">
                                    <label for="category">Select Category</label>
                                    <select name="category_id" id="" class="form-control">
                                        <option disabled selected>Select Category</option>
                                        @forelse ($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @empty
                                            <option>No Category</option>
                                        @endforelse
                                    </select>
                                    @error('category_id')
                                        <span class="text-danger my-3">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="title">Blog Title</label>
                                    <input class="form-control" placeholder="Enter Your Blog Title" type="text"
                                        name="title" id="title">
                                    @error('title')
                                        <span class="text-danger my-3">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header border-bottom">
                                                <h3 class="card-title">Blog Details</h3>
                                            </div>
                                            <div class="card-body">
                                                <textarea id="summernote" name="blog_details">
                                                    <p>Blog Details</p>
                                                </textarea>
                                                @error('blog_details')
                                                    <span class="text-danger my-3">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Row-->
                                <div class="form-group">
                                    <label for="tags">Blog Tags</label>
                                    <input class="form-control" type="text" name="tags" id="tags">
                                    @error('tags')
                                        <span class="text-danger my-3">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="thumbail">Thumbail</label>
                                    <input class="form-control" type="file" name="thumbail" id="image">
                                    @error('thumbail')
                                        <span class="text-danger my-3">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="thumbail"></label>
                                    <img id="show_image" src="{{ asset('images/No-Image-Placeholder.svg.png') }}"
                                        alt="" width="110" style="border-radius: 50%">
                                </div>
                                <div class="form-group">
                                    <label for="gallery_image">Gallery Image</label>
                                    <input class="form-control" type="file" name="gallery_image[]" multiple
                                        id="multiImage">
                                    <div class="row mt-3" id="preview_img"></div>
                                    @error('gallery_image')
                                        <span class="text-danger my-3">{{ $message }}</span>
                                    @enderror
                                </div>
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

    @push('script')
        <script>
            $('[name=tags]').tagify();
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#image').change(function(e) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#show_image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0'])
                })
            })
        </script>
        <script>
            $(document).ready(function() {
                $('#multiImage').on('change', function() { //on file input change
                    if (window.File && window.FileReader && window.FileList && window
                        .Blob) //check File API supported browser
                    {
                        var data = $(this)[0].files; //this file data

                        $.each(data, function(index, file) { //loop though each file
                            if (/(\.|\/)(gif|jpg|jpeg|png|webp)$/i.test(file
                                    .type)) { //check supported file type
                                var fRead = new FileReader(); //new filereader
                                fRead.onload = (function(file) { //trigger function on successful read
                                    return function(e) {
                                        var img = $('<img/>').addClass('thumb').attr('src',
                                                e.target.result).width(100)
                                            .height(80); //create image element 
                                        $('#preview_img').append(
                                            img); //append image to output element
                                    };
                                })(file);
                                fRead.readAsDataURL(file); //URL representing the file's data.
                            }
                        });

                    } else {
                        alert("Your browser doesn't support File API!"); //if File API is absent
                    }
                });
            });
        </script>
    @endpush
@endsection
