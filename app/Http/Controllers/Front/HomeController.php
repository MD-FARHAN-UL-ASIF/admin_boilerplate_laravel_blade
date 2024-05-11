<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\service;
use App\Models\Book;   
use App\Models\Category;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
     public function service()
    {
        $services = Service::get()->toArray();
        return view('wise_corporation.service', compact('services'));
    }

    public function projectProfile()
    {
        $booksByCategory = Book::with('category')->get()->groupBy('category_id');

        return view('wise_corporation.project_profile', compact('booksByCategory'));
    }

    //project-profile/book by category
    public function booksByCategory($category_id)
    {
        // Session::put('page', 'books-by-category');

    
        $category = Category::findOrFail($category_id);

        $books = Book::where('category_id', $category_id)->get();

        return view('wise_corporation.category', compact('category', 'books'));
    }

    //project-profile/book by id
   public function booksById($id)
{
    $book = Book::findOrFail($id);
    $category = $book->category; 

    return view('wise_corporation.book_individual', compact('book', 'category'));
}


    public function contactUs()
    {
        return view('wise_corporation.contact_us');
    }

    public function submitContactForm(Request $request)
    {
        $data = $request->all();

        $rules = [
            'name' => 'required|string|max:255',
            'phone' =>  ['required', 'regex:/^\+880[0-9]{10}$/'],
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ];

        $customMessages =[
             'name.required' => 'নাম খালি রাখা যাবে না',
            'phone.required' => 'ফোন নম্বর প্রয়োজনীয়',
            'phone.regex' => 'মোবাইল নম্বরটি অবশ্যই +880 দিয়ে শুরু হতে হবে এবং পরবর্তীতে সঠিকভাবে 10 টি সংখ্যার হতে হবে',
            'email.required' => 'ইমেইল খালি রাখা যাবে না',
            'email.email' => 'সঠিক ইমেইল দিন',
            'subject.required' => 'Subject খালি রাখা যাবে না',
            'message.required' => 'Message খালি রাখা যাবে না',
        ];

        $validator = Validator::make($data, $rules, $customMessages);

        if ($validator->fails()) {
            return redirect()->back()->with('error_message', $validator->errors()->first());
        }

        $contactForm = new ContactForm();
        $contactForm->name = $data['name'];
        $contactForm->phone = $data['phone'];
        $contactForm->email = $data['email'];
        $contactForm->subject = $data['subject'];
        $contactForm->message = $data['message'];
        $contactForm->save();
        

        return redirect()->back()->with('success_message','আপনার বার্তা সফলভাবে জমা দেয়া হয়েছে');

    }

}
