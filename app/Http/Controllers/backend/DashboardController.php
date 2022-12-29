<?php

namespace App\Http\Controllers\backend;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // display dashboard view
    public function index()
    {   
       $blog = Blog::latest()->get(); 
       $blogCount = $blog->count();
       $Category = Category::latest()->get(); 
       $CategoryCount = $Category->count();
       $User = User::latest()->get();
       $UserCount = $User->count(); 
       $Subscribe = Subscribe::latest()->get();
       $SubscribeCount = $Subscribe->count();
       return view('backend.dashboard',compact('blogCount','UserCount','CategoryCount','SubscribeCount'));
    }

    // for logout 
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    // for login
    public function login()
    {
        return view('admin.auth.login');
    }

    // for register
    public function register()
    {
        return view('admin.auth.register');
    }

    // for forget password
    public function forgertPassword()
    {
        return view('admin.auth.forget-password');
    }
}
