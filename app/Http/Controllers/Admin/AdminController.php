<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\AdminsPermission;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Cookie;

use Session;

class AdminController extends Controller
{
    public function dashboard()
    {
        Session::put('page','dashboard');
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

        $remember = $request->filled('remember_me');

        if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']], $remember)) {
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


public function updateAdminDetails(Request $request)
{
    if ($request->isMethod('post')) {
        $data = $request->all();

        $rules = [
            'admin_name' => 'required|max:255',
            'admin_mobile' => ['required', 'regex:/^\+880[0-9]{10}$/'],
            'admin_image' => 'image'
        ];

        $customMessage = [
            'admin_name.required' => "Name is required",
            'admin_mobile.required' => 'Mobile number is required',
            'admin_mobile.numeric' => 'Mobile must be numeric',
            'admin_mobile.regex' => "The admin mobile must start with +880 followed by exactly 10 numeric digits.",
            'admin_image.image' => "valid image required",
        ];

        $validator = Validator::make($data, $rules, $customMessage);

        if ($validator->fails()) {
            return redirect()->back()->with('error_message', $validator->errors()->first());
        }

        // upload images
  if ($request->hasFile('admin_image')) {
                $image_tmp = $request->file('admin_image');
                if ($image_tmp->isValid()) {
                    //Get image extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    //Generate new image name
                    $image_name = rand(111, 99999) . '.' . $extension;
                    $image_path = 'admin/images/admin_images/' . $image_name;
                    Image::make($image_tmp)->save($image_path);
                }
            } else if (!empty($data['current_image'])) {
                $image_name = $data['current_image'];
            } else {
                $image_name = "";
            }

                        if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

        // Update Admin Details
                   Admin::where('email', Auth::guard('admin')->user()->email)->update([
                'name' => $data['admin_name'],
                'mobile' => $data['admin_mobile'],
                'image' => $image_name,
            ]);

            return redirect()->back()->with('success_message', 'Details Updated Successfully!☙');
    }

    return view('admin.update_admin_details');
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

        // Clear remember me cookies
    Cookie::queue(Cookie::forget('email'));
    Cookie::queue(Cookie::forget('password'));

    }

    public function subadmins(){
        Session::put('page', 'subadmins');
        $subadmins = Admin::where('type', 'subadmin')->get();
        return view('admin.subadmin.subadmin')->with(compact('subadmins'));
    }

    public function updateSubadminStatus(Request $request)
    {
     if($request->ajax()){
        $data = $request->all();
        // echo "<pre>"; print_r($data); die;

        if($data['status'] == "Active"){
            $status = 0;
        }else{
            $status =1;
        }
        Admin::where('id', $data['subadmin_id'])->update(['status' =>$status]);
        return response()->json(['status' => $status, 'subadmin_id' => $data['subadmin_id']]);
     }
    }

   public function addEditSubadmin(Request $request, $id=null){
    if($id==""){
        $title = "Add Subadmin";
        $subadmindata = new Admin;
        $message = "Subadmin added successfully";
    } else {
        $title = "Edit Subadmin";
        $subadmindata = Admin::findOrFail($id);
        $message = "Subadmin updated successfully";
    }

    if($request->isMethod('post')){
        $data = $request->all();

        $rules = [
            'name' => 'required|max:255',
            'mobile' => ['required', 'regex:/^\+880[0-9]{10}$/'],
            'image' => 'image'
        ];

        $customMessage = [
            'name.required' => "Name is required",
            'mobile.required' => 'Mobile number is required',
            'mobile.numeric' => 'Mobile must be numeric',
            'mobile.regex' => "The admin mobile must start with +880 followed by exactly 10 numeric digits.",
            'image.image' => "Valid image required",
        ];

        $validator = Validator::make($data, $rules, $customMessage);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Check if image was uploaded
        if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                // Get image extension
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate new image name
                $image_name = rand(111, 99999) . '.' . $extension;
                $image_path = 'admin/images/admin_images/' . $image_name;
                // Save image
                Image::make($image_tmp)->save($image_path);
                // Assign image name to data
                $subadmindata->image = $image_name;
            }
        } else {
            // If no new image is uploaded, keep the existing image
    if (!empty($subadmindata->image)) {
        $subadmindata->image = $subadmindata->image;
    } else {
        $subadmindata->image = 'no_image.jpg';
    }
        }

        // Assign other form data
        $subadmindata->name = $data['name'];
        $subadmindata->mobile = $data['mobile'];
        if($id == "") {
            $subadmindata->email = $data['email'];
            $subadmindata->type = 'subadmin';
            $subadmindata->status = 1;
            // Hash password if provided
            if (!empty($data['password'])) {
                $subadmindata->password = bcrypt($data['password']);
            }
        }
        // Save the data
        $subadmindata->save();

        return redirect('admin/subadmins')->with('success_message', $message);
    }

    return view('admin.subadmin.add_edit_subadmin')->with(compact('title', 'subadmindata'));
}



        public function deleteSubadmin($id)
    {
        Admin::where('id', $id)->delete();
        return redirect()->back()->with('success_message', 'Subadmin deleted...!');
    }


    public function updatePermission($id, Request $request)
{

    if ($request->isMethod('post')) {
        $data = $request->all();
        
        // Delete earlier permissions
        AdminsPermission::where('admin_id', $id)->delete();

        // Add new permission
        foreach ($data as $module => $permissions) {
            if ($module!= '_token' && $module!= 'admin_id') {
                $view = isset($permissions['view'])? 1 : 0;
                $edit = isset($permissions['edit'])? 1 : 0;
                $full = isset($permissions['full'])? 1 : 0;

                $permission = new AdminsPermission;
                $permission->admin_id = $id;
                $permission->module = $module;
                $permission->view_access = $view;
                $permission->edit_access = $edit;
                $permission->full_access = $full;
                $permission->save();
            }
        }

        $message = "Sub Admin Permission Updated Successfully....!";
        return redirect()->back()->with('success_message', $message);
    }

    $subadminPermission = AdminsPermission::where('admin_id', $id)->get();
$subadminDetails = Admin::where('id', $id)->first()->toArray();
    $title = "Update Subadmin Permission for ".$subadminDetails['name'];

    return view('admin.subadmin.update_permission', compact('title', 'id', 'subadminPermission'));
}
}