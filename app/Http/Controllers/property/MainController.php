<?php

namespace App\Http\Controllers\property;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class MainController extends Controller
{
    public function index()
    {
    	return view('propertyAdmin.index');
    }
}