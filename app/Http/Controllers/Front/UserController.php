<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

        public function index(){
        return view('front.users.index');
    }


public function loginUser(Request $request){
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

if (Auth::guard('user')->attempt(['email' => $data['email'], 'password' => $data['password']], $remember)) {
    return redirect("user/index");
} else {
    return redirect()->back()->with("error_message", "Invalid Email or Password");
}

    }
    return view('front.users.login');
}


public function registerUser(Request $request)
{
    if ($request->isMethod('post')) {
        // Process POST request for registration
        $data = $request->all();

        $rules = [
            'name' => 'required|max:255',
            'mobile' => ['required', 'regex:/^\+880[0-9]{10}$/'],
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:6',
        ];

        $customMessages = [
            'name.required' => 'Name is required',
            'mobile.required' => 'Mobile number is required',
            'mobile.regex' => 'The mobile number must start with +880 followed by exactly 10 numeric digits.',
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email format',
            'email.unique' => 'Email is already taken',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 6 characters long',
        ];

        $validator = Validator::make($data, $rules, $customMessages);

        if ($validator->fails()) {
            return redirect()->back()->with('error_message', $validator->errors()->first());
        }

        // Validation passed, proceed with user creation
        $user = new User;
        $user->name = $data['name'];
        $user->mobile = $data['mobile'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->status = 1;
        $user->save();

        // Redirect to the login page
        return redirect()->route('user.login')->with('success_message', 'Registration successful. Please login.');
    } else {
        // Handle GET request for displaying the registration form
        return view('front.users.register');
    }
}

    public function logoutUser(Request $request)
    {
        Auth::guard('user')->logout();

        return redirect()->route('user.login')->with('success_message', 'Logged out successfully.');
    }

    public function forgotPassword(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|exists:users',
            ], [
                'email.exists' => 'Email does not exist'
            ]);

            if($validator->fails()){
                return response()->json(['status' => false, 'type' => 'error', 'errors' => $validator->errors()]);
            } else {
                // Email exists, handle password reset logic here
                $email = $data['email'];
                $code = base64_encode($email);
                $messageData = ['email' => $data['email'], 'code' => $code];
                Mail::send('emails.reset_password', $messageData, function($message) use($email){
                    $message ->to($email)->subject('Reset Your Password - FARHANX');
                });
                return response()->json(['status' => true, 'type' => 'success', 'message' => 'Password reset link sent successfully']);
            }
        } else {
            return view('front.users.forgot_password');
        }
    }

        public function resetPassword(Request $request, $code=null)
{
    if($request->ajax())
    {
        $data = $request->all();

        $email = base64_decode($data['code']);
        $userCount = User::where('email', $email)->count();

        if($userCount > 0)
        {
            // Update New Password
            User::where('email', $email)->update(['password' => bcrypt($data['password'])]);

            // Send confirmation mail to user
            $messageData = ['email' => $email];
            Mail::send('emails.reset_password_confirmation', $messageData, function($message) use ($email){
                $message->to($email)->subject('Password Updated - FARHANX');
            });

            // Show success message
            return response()->json(['type' =>'success', 'message' => 'Password reset for your account. You can login with your new password now.']);
        } else {
            abort(404);
        }
    } else {
        // If the request is not AJAX, return the view for the reset password form
        return view('front.users.reset_password')->with(compact('code'));
    }
}
}


