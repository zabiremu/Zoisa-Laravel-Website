<?php

namespace App\Http\Controllers\backend;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MultiImage;
use Illuminate\Support\Facades\Auth;
use PhpParser\Parser\Multiple;

class BlogsController extends Controller
{
    public function index()
    {
        $allData = Blog::with('category')
            ->latest()
            ->get();
        return view('backend.blogs.index', compact('allData'));
    }

    public function create()
    {
        $category = Category::latest()->get();
        return view('backend.blogs.create', compact('category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'blog_details' => 'required',
            'tags' => 'required',
            'thumbail' => 'required|mimes:png,jpg,jpeg,webp',
        ]);
        $userName = Auth::user()->name;
        $userImage = Auth::user()->image;
        $data = new Blog();
        $data->category_id = $request->category_id;
        $data->title = $request->title;
        $data->details = $request->blog_details;
        $data->author_name = $userName;
        $data->author_img = $userImage;
        $data->tag = $request->tags;
        if ($request->file('thumbail')) {
            $ext = $request->thumbail->extension();
            $imgName = 'Thumbail-' . uniqid() . '.' . $ext;
            $img = $request->thumbail->move(public_path('images/Blogs-Thumbail/'), $imgName);
            $saveUrl = 'images/Blogs-Thumbail/' . $imgName;
            $data->thumbail = $imgName;
            $data->thumbail_url = $saveUrl;
            $data->save();
            if ($request->file('gallery_image')) {
                $gallery = $request->gallery_image;
                foreach ($gallery as $item) {
                    $multi = new MultiImage();
                    $ext = $item->extension();
                    $imgName = 'Gallery-' . uniqid() . '.' . $ext;
                    $img = $item->move(public_path('images/Blogs-Thumbail/Gallery/'), $imgName);
                    $saveUrl = 'images/Blogs-Thumbail/Gallery/' . $imgName;
                    $multi->blog_id = $data->id;
                    $multi->multi_Image = $imgName;
                    $multi->multi_Image_url = $saveUrl;
                    $multi->save();
                }
                $notification = [
                    'message' => 'Blogs Successfully Updated',
                    'alert-type' => 'success',
                ];
                return redirect()
                    ->route('all.blogs')
                    ->with($notification);
            }
        }
    }

    public function edit($id)
    {
        $data = Blog::find($id);
        $multi = MultiImage::where('blog_id', $data->id)
            ->latest()
            ->get();
        $category = Category::latest()->get();
        return view('backend.blogs.edit', compact('data', 'category', 'multi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'blog_details' => 'required',
            'tags' => 'required',
        ]);
        $userName = Auth::user()->name;
        $userImage = Auth::user()->image;
        $data = Blog::find($id);
        $data->category_id = $request->category_id;
        $data->title = $request->title;
        $data->details = $request->blog_details;
        $data->author_name = $userName;
        $data->author_img = $userImage;
        $data->tag = $request->tags;
        if ($request->file('thumbail')) {
            if ($data->thumbail != null) {
                $unlink = unlink(public_path($data->thumbail_url));
            }
            $ext = $request->thumbail->extension();
            $imgName = 'Thumbail-' . uniqid() . '.' . $ext;
            $img = $request->thumbail->move(public_path('images/Blogs-Thumbail/'), $imgName);
            $saveUrl = 'images/Blogs-Thumbail/' . $imgName;
            $data->thumbail = $imgName;
            $data->thumbail_url = $saveUrl;
            $data->save();
            $notification = [
                'message' => 'Blogs Successfully Updated',
                'alert-type' => 'success',
            ];
            return redirect()
                ->route('all.blogs')
                ->with($notification);
        }
        $data->save();
        $notification = [
            'message' => 'Blogs Successfully Updated',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.blogs')
            ->with($notification);
    }
    public function updateMultiImage(Request $request, $id)
    {
        if ($request->multi_img != null) {
            $data = MultiImage::find($id);
            if ($data->multi_Image != null) {
                $unlink = unlink(public_path($data->multi_Image_url));
            }
            $ext = $request->multi_img->extension();
            $imgName = 'Thumbail-' . uniqid() . '.' . $ext;
            $img = $request->multi_img->move(public_path('images/Blogs-Thumbail/Gallery/'), $imgName);
            $saveUrl = 'images/Blogs-Thumbail/Gallery/' . $imgName;
            $data->multi_Image = $imgName;
            $data->multi_Image_url = $saveUrl;
            $data->save();
            $notification = [
                'message' => 'Gallery Image Successfully Updated',
                'alert-type' => 'success',
            ];
            return redirect()
                ->route('all.blogs')
                ->with($notification);
        } else {
            $notification = [
                'message' => 'Please Select a Image',
                'alert-type' => 'error',
            ];
            return redirect()
                ->route('all.blogs')
                ->with($notification);
        }
    }

    public function deleteData($id)
    {
        $data = Blog::find($id);
        $muli = MultiImage::where('blog_id', $id)->get();
        // dd($muli);
        if ($muli != null) {
            foreach ($muli as $item) {
                $unlink = unlink(public_path($item->multi_Image_url));
            }
        };
        $data->delete();
        $unlink = unlink(public_path($data->thumbail_url));
        $notification = [
            'message' => 'Blogs Successfully Deleted',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.blogs')
            ->with($notification);
    }
    public function deleteMulti($id)
    {
        $muli = MultiImage::find($id);
        $muli->delete();
        $unlink = unlink(public_path($muli->multi_Image_url));
        $notification = [
            'message' => 'Gallery Image Successfully Deleted',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.blogs')
            ->with($notification);
    }
}
