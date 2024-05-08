<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\service;

class HomeController extends Controller
{
     public function service()
    {
        $services = Service::get()->toArray();
        return view('wise_corporation.service', compact('services'));
    }
}
