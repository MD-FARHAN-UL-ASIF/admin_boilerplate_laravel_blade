<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required|max:30|min:6',
            ];

            $customMessage = [
                'email.required' => "Email is required",
                'email.email' => "Valid email is required",
                'password.required' => 'Password is required'
            ];

            $request->validate($rules, $customMessage);

            if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return redirect("admin/dashboard");
            } else {
                return redirect()->back()->with("error_message", "Invalid Email or Password");
            }
        }
        return view('admin.login');
    }

    public function updatePassword()
    {
        return view('admin.update_password');
    }

public function checkCurrentPassword(Request $request)
    {
        $data = $request->all();
        if (Hash::check($data['current_password'], Auth::guard('admin')->user()->password)) {
            return "true";
        } else {
            return "false";
        }
    }



    public function logout(
    ) {
        Auth::guard('admin')->logout();
        return redirect('admin/logout');

    }
}