<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;


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

public function updatePassword(Request $request)
{
    if($request->isMethod('post')){
        $data = $request->all();

        // Check if the new password matches the confirmation password
        if ($data['new_password'] !== $data['confirm_password']) {
            return redirect()->back()->with('error_message', 'The new password and confirmation password do not match.');
        }

        // Define validation rules
        $rules = [
            'current_password' => 'required',
            'new_password' => 'required|string|min:6|max:30',
            'confirm_password' => 'required',
        ];

        // Define custom error messages
        $messages = [
            'new_password.min' => 'The new password must be at least 6 characters.',
            'new_password.max' => 'The new password must not exceed 30 characters.',
        ];

        // Validate the request data
        $validator = Validator::make($data, $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            // If validation fails, set error message and redirect back
            return redirect()->back()->with('error_message', $validator->errors()->first());
        }

        // Check current password
        if (Hash::check($data['current_password'], Auth::guard('admin')->user()->password)) {
            // Update password
            Admin::where('id', Auth::guard('admin')->user()->id)->update([
                'password' => bcrypt($data['new_password'])
            ]);
            return redirect()->back()->with('success_message','Password has been updated successfully!');
        } else {
            return redirect()->back()->with('error_message', 'Your current password is incorrect!');
        }
    }
    return view('admin.update_password');
}


public function updateAdminDetails(){
    return view('update_admin_details');
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