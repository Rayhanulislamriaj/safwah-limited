<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPasswordMail;
use App\Models\User;
use Hash;
use Auth;
use Mail;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // $password = '1234';
        // return $dd = Hash::make($password);
        return view('backend.auth.login');
    }
    public function forgot(Request $request)
    {
        return view('backend.auth.forgot');
    }
    public function login_admin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            if (!empty(Auth::User()->status)) {
                if (Auth::User()->is_role = '1') {
                    return redirect()->intended('admin/dashboard');
                } else {
                    return redirect('login')->with('error', 'You are not Admin!');
                }
            } else {
                $user_id = Auth::user()->id;
                Auth::logout();
                $user = User::find($user_id);
                return redirect('login')->with('success', 'This email is not verified!');
            }
        } else {
            return redirect('login')->with('error', 'please enter your correct credentials!');
        }
    }

    public function admin_forgot(Request $request)
    {
        $random_password = rand(1111, 9999);
        $user = User::where('email', '=', $request->email)->first();

        if (!empty($user)) {
            $user->password = Hash::make($random_password);
            $user->save();

            $user->password_random = $random_password;

            Mail::to($user->email)->send(new ForgotPasswordMail($user));

            return redirect('login')->with('success', 'New Password send successfully! Please check your Email.');

        } else {
            return back()->with('error', 'Email ID does not found!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect(route('login'));
    }
}