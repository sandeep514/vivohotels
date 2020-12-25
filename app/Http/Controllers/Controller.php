<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ContactUs;
use Session;
use Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index()
    {
        return view('front.index');
    }

    public function about()
    {
        return view('front.aboutus');
    }

    public function blog()
    {
        return view('front.blogs');
    }

    public function contactUs()
    {
        return view('front.contactus');
    }



    public function restaurant()
    {
        return view('front.restaurant');
    }

}
