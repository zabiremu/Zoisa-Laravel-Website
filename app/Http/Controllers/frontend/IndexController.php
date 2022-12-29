<?php

namespace App\Http\Controllers\frontend;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MultiImage;
use App\Models\Subscribe;

class IndexController extends Controller
{
    public function index()
    {
        $blog = Blog::with('category')
            ->latest()
            ->simplePaginate(8);
        $data = Blog::with('category')
            ->orderBy('id', 'desc')
            ->limit(3)
            ->get();
        return view('frontend.index', compact('blog', 'data'));
    }
    public function category($id)
    {
        $cat = Category::find($id);
        $subCat = Category::skip(2)->first();
        $subCatCount = $subCat->count();
        $blog = Blog::where('category_id', $subCat->id)
            ->latest()
            ->limit(3)
            ->get();
        $countBlog = Blog::where('category_id', $cat->id)
            ->latest()
            ->get();
        $count = $countBlog->count();
        $countBlogs = $countBlog->count();
        $blogs = Blog::where('category_id', $cat->id)
            ->latest()
            ->limit(3)
            ->get();
        $data = Blog::where('category_id', $subCat->id)
            ->latest()
            ->get();
        return view('frontend.categoryPage', compact('cat', 'count', 'subCat', 'subCatCount', 'blog', 'blogs', 'data', 'countBlogs'));
    }

    public function blogDetails($id)
    {
        $subCat = Category::skip(1)->first();
        $blogDeatils = Blog::with('category')->find($id);
        $multiImage = MultiImage::where('blog_id', $id)->get();
        $blogs = Blog::with('category')
            ->OrderBy('id', 'desc')
            ->limit(3)
            ->get();
        $blog = Blog::with('category')
            ->OrderBy('id', 'asc')
            ->limit(2)
            ->get();
        $data = Blog::where('category_id', $subCat->id)
            ->latest()
            ->get();
        return view('frontend.blog', compact('blogDeatils', 'multiImage', 'blogs', 'blog', 'data', 'subCat'));
    }

    public function subscribe(Request $request)
    {
        $data = new Subscribe();
        $data->name = $request->NAME;
        $data->email = $request->EMAIL;
        $data->save();
        $notification = [
            'message' => 'Successfully Subscribed',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('home')
            ->with($notification);
    }
    public function search(Request $request)
    {
        $search = $request->searchValue;
        if ($search) {
            $blog = Blog::select('id', 'title')
                ->where('title', 'Like', '%' . $search . '%')
                ->get();
            return response()->json($blog);
        } else {
            return response('No Product', 404);
        }
    }
}
