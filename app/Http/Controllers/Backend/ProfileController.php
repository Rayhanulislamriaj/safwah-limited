<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function admin_profile(Request $request)
    {
        $data['getrecord'] = User::find(Auth::user()->id);
        return view('backend.profile.list', $data);
    }
    public function admin_profile_update(Request $request)
    {
        $user = $request->validate([
            'email' => 'required|unique:users,email,' . Auth::user()->id
        ]);
        $user = User::find(Auth::user()->id);

        $user->name = trim($request->name);
        $user->email = trim($request->email);

        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect('admin/profile')->with('success', 'Profile Update Successfully');
    }




}