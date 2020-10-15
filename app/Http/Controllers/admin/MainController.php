<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function signin()
    {
    	return view('admin.sign-in');
    }
    public function index()
    {
        return view('admin.index');
    }
}