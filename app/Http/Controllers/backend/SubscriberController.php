<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index()
    {
        $allData = Subscribe::latest()->get();
        return view('backend.subscribe.view',compact('allData'));
    }
    public function deleteData($id)
    {
        $data = Subscribe::find($id);
        $data->delete();
        $notification = [
            'message' => 'Subscriber Deleted',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.subscriber')
            ->with($notification);
    }
}
