<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ProjectForms;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

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

    public function projectForm(){
        return view('front.users.form_project');
    }

        public function projectForm_2(){
        return view('front.users.form_project_step');
    }

        public function submitProjectForm(Request $request)
    {
        // dd($request);
        // Validate the incoming request data
        $validatedData = $request->validate([
            'status' => 'required|string',
            'project_type' => 'required|array',
            'project_name' => 'required|string',
            'industry' => 'required|string',
            'category' => 'required|string',
            'products' => 'required|string',
            'project_location' => 'required|string',
            'project_cost' => 'required|string',
            'project_layout' => 'required|string',
            'existing_bank' => 'required|string',
            'sponsors_equity' => 'required|string',
            'project_debt' => 'required|string',
            'loan_bank' => 'required|string',
            'loan_status' => 'required|string',
            'other_liabilities' => 'required|string',
            'yearly_revenue' => 'required|string',
            'yearly_income' => 'required|string',
            'machines' => 'required|string',
            'land' => 'required|string',
            'civil_works' => 'required|string',
            'mortage_assets' => 'required|string',
            'other_assets' => 'required|string',
            'company_name' => 'required|string',
            'established_year' => 'required|string',
            'legal_status' => 'required|string',
            'incorporation_number' => 'required|string',
            'directors' => 'required|string',
            'share_authorized' => 'required|string',
            'owners' => 'required|string',
            'director_shares' => 'required|string',
            'authorized_capital' => 'required|string',
            'paidup_capital' => 'required|string',
            'key_persons' => 'required|string',
            'head_office_location' => 'required|string',
            'major_client' => 'required|string',
            'competitors' => 'required|string',
            'yearly_turnover' => 'required|string',
            'total_employess' => 'required|string',
            'work_value' => 'required|string',
            'company_logo' => 'nullable|max:5120',
            'project_picture' => 'nullable|max:5120',
            'land_picture' => 'nullable|max:5120',
            'owners_pictures' => 'nullable|max:5120',
        ]);
        // dd($validatedData);

        try {
            // Create a new ProjectForm instance
            $projectForm = new ProjectForms;

            // Set the properties of the ProjectForm instance
            $projectForm->status = $validatedData['status'];
            $projectForm->project_type = json_encode($validatedData['project_type']);
            $projectForm->project_name = $validatedData['project_name'];
            $projectForm->industry = $validatedData['industry'];
            $projectForm->category = $validatedData['category'];
            $projectForm->products = $validatedData['products'];
            $projectForm->project_location = $validatedData['project_location'];
            $projectForm->project_cost = $validatedData['project_cost'];
            $projectForm->project_layout = $validatedData['project_layout'];
            $projectForm->existing_bank = $validatedData['existing_bank'];
            $projectForm->sponsors_equity = $validatedData['sponsors_equity'];
            $projectForm->project_debt = $validatedData['project_debt'];
            $projectForm->loan_bank = $validatedData['loan_bank'];
            $projectForm->loan_status = $validatedData['loan_status'];
            $projectForm->other_liabilities = $validatedData['other_liabilities'];
            $projectForm->yearly_revenue = $validatedData['yearly_revenue'];
            $projectForm->yearly_income = $validatedData['yearly_income'];
            $projectForm->machines = $validatedData['machines'];
            $projectForm->land = $validatedData['land'];
            $projectForm->civil_works = $validatedData['civil_works'];
            $projectForm->mortage_assets = $validatedData['mortage_assets'];
            $projectForm->other_assets = $validatedData['other_assets'];
            $projectForm->company_name = $validatedData['company_name'];
            $projectForm->established_year = $validatedData['established_year'];
            $projectForm->legal_status = $validatedData['legal_status'];
            $projectForm->incorporation_number = $validatedData['incorporation_number'];
            $projectForm->directors = $validatedData['directors'];
            $projectForm->share_authorized = $validatedData['share_authorized'];
            $projectForm->owners = $validatedData['owners'];
            $projectForm->director_shares = $validatedData['director_shares'];
            $projectForm->authorized_capital = $validatedData['authorized_capital'];
            $projectForm->paidup_capital = $validatedData['paidup_capital'];
            $projectForm->key_persons = $validatedData['key_persons'];
            $projectForm->head_office_location = $validatedData['head_office_location'];
            $projectForm->major_client = $validatedData['major_client'];
            $projectForm->competitors = $validatedData['competitors'];
            $projectForm->yearly_turnover = $validatedData['yearly_turnover'];
            $projectForm->total_employess = $validatedData['total_employess'];
            $projectForm->work_value = $validatedData['work_value'];

        
           // Handle file uploads for each image field
$imageFields = ['company_logo', 'project_picture', 'land_picture', 'owners_pictures'];

foreach ($imageFields as $field) {
    if ($request->hasFile($field)) {
        $image = $request->file($field);
        $imageName = $field.'_'.time().'.'.$image->getClientOriginalExtension();
        
        // Move the uploaded file to the desired location
        $image->move(public_path('front/project_images'), $imageName);

        // Set the image path in the model
        $projectForm->{$field} = 'front/project_images/'.$imageName;
    }
}
            //dd($projectForm);
            $projectForm->save();
            return redirect()->route('user.index')->with('success_message', 'Project form submitted successfully.');
        } catch (\Exception $e) {
            // Log the error message
            Log::error($e->getMessage());
            // dd($e->getMessage());

            // Redirect the user back to the project form submission page with an error message
            return redirect()->back()->with('error_message', 'An error occurred while submitting the project form. Please try again later.',$e->getMessage() );
        }
    }
}


