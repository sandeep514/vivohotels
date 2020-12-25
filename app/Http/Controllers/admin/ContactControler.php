<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactControler extends Controller
{
    public function index()
    {
    	$contacts = ContactUs::get();
    	return View('admin.contactus' , compact('contacts'));
    }
}
