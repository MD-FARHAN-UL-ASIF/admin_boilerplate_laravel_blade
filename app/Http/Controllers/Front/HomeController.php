<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\service;
use App\Models\Book;   
use App\Models\Category;

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
}
