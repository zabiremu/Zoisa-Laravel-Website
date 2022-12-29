@extends('backend.layouts.app')

@section('content')
    {{-- jquery start --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- jquery end --}}
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Edit Blogs</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Blogs</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    {{-- card start --}}
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit Blogs</h3>
                </div>
                <form class="card-body" action="{{ route('update.blogs', $data->id) }}" method="POST" id="from"
                    enctype="multipart/form-data">
                    @csrf
                    <p class="text-muted ms-2">Edit your blogs details</p>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-2">
                                <div class="form-group">
                                    <label for="category">Select Category</label>
                                    <select name="category_id" id="" class="form-control">
                                        <option disabled selected>Select Category</option>
                                        @forelse ($category as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->id == $data->category_id ? 'selected' : '' }}>{{ $item->name }}
                                            </option>
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
                                        name="title" id="title" value="{{ $data->title }}">
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
                                                    {{ $data->details }}
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
                                    <input class="form-control" type="text" name="tags" id="tags"
                                        value="{{ $data->tag }}">
                                    @error('tags')
                                        <span class="text-danger my-3">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="thumbail">Thumbail</label>
                                    <input class="form-control" type="file" name="thumbail" id="image">
                                </div>
                                <div class="form-group">
                                    <label for="thumbail"></label>
                                    <img id="show_image"
                                        src="{{ $data->thumbail_url != null ? asset($data->thumbail_url) : asset('images/No-Image-Placeholder.svg.png') }}"
                                        alt="" width="110" style="border-radius: 50%">
                                </div>
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Image Gallery</h3>
                    </div>
                    <table class="table table-striped ps-3 pe-3">
                        <thead class="ps-3 pe-3">
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Image</th>
                                <th scope="col">Change Image </th>
                                <th scope="col">Delete </th>
                            </tr>
                        </thead>
                        <tbody class="ps-3 pe-3">



                            @foreach ($multi as $key => $img)
                                <form method="post" action="{{ route('update.multiImage', $img->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td> <img src="{{ asset($img->multi_Image_url) }}" style="width:70; height: 40px;">
                                        </td>
                                        <td> <input type="file" class="form-group" name="multi_img">
                                        </td>
                                        <td>
                                            <input type="submit" class="btn btn-primary px-4" value="Update Image " />
                                            <a href="{{ route('delete.multi',$img->id) }}" class="btn btn-danger"> Delete </a>
                                        </td>
                                    </tr>
                                </form>
                            @endforeach

                        </tbody>
                    </table>

                </div>
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
    @endpush
@endsection
