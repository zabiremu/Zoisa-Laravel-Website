<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;

class SocailMediaController extends Controller
{
    public function viewSocial()
    {   
        $data = Social::first();
        return view('backend.social-media-link.index',compact('data'));
    }
    public function updateSocial(Request $request)
    {   
        $data = Social::first();
        $data->facebook = $request->facebook;
        $data->instagram = $request->instagram;
        $data->twitter = $request->twitter;
        $data->tiktok = $request->tiktok;
        $data->save();
        $notification = array(
            'message' => "Social Media Link Successfully Updated",
            'alert-type' => 'success',
        );
        return redirect()->route('view.social')->with($notification);
    }
}
