<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    // display profile page
    public function adminProfile()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('admin.profile.profile', compact('user'));
    }

    // update user data
    public function updateData(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:80',
            'email' => 'required|max:80',
        ]);

        if ($request->file('image')) {
            $user = User::find($id);
            $path = $user->image;
            if($path != null){
                $delImage = unlink(public_path($path));
            }
            $ext = $request->image->extension();
            $imgName = uniqid() . '.' . $ext;
            $imgSave = $request->image->move(public_path('images/profile'), $imgName);
            $saveUrl = 'images/profile/' . $imgName;

            $user->name = $request->name;
            $user->email = $request->email;
            $user->image = $saveUrl;
            $user->save();
            $notification = array(
                'message' => "Admin Profile Successfully Updated",
                'alert-type' => 'success',
            );
            return redirect()->route('admin.profile')->with($notification);
        }else{
            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
            $notification = array(
                'message' => "Admin Profile Successfully Updated",
                'alert-type' => 'success',
            );
            return redirect()->route('admin.profile')->with($notification);
        }
    }

    public function passwordView()
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        return view('admin.profile.password',compact('data'));
    }

    public function updatePassword(Request $request,$id)
    {
        $data = User::find($id);
        $request->validate([
            'currentPassword' => 'required|min:8',
            'newPassword' => 'required|min:8',
            'confirmPassword' => 'required|min:8|same:newPassword',
        ]);

        $oldPassword = $data->password;

        if(Hash::check($request->currentPassword,$oldPassword)){
            
            $id = Auth::user()->id;
            $user = User::find($id);

            $user->password = bcrypt($request->newPassword);
            $user->save();

            $notification = array(
                'message' => "Password Successfully Updated",
                'alert-type' => 'success',
            );
            return redirect()->route('user.password.view')->with($notification);
        }else{

            $notification = array(
                'message' => "Old Password is not match",
                'alert-type' => 'error',
            );
            return redirect()->route('user.password.view')->with($notification);
        }
    }  
}
