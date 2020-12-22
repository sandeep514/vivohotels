<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactus;
use Auth;

class AuthControler extends Controller
{
    public function loginuser(Request $request)
    {
    	$this->validate($request , [
    		'email' => 'required|email',
    		'password' => 'required'
    	]);
        
        $credentials = ['email' => $request->email, 'password' => $request->password];
    	if(Auth::guard('admin')->attempt($credentials)){
			return redirect()->route('admin.index');    		
    	}else{
    		return back()->withErrors(['error' => "Wrong username and password"]);
    	}

    	// $contacts = Contactus::get();
    	// return View('admin.contactus' , compact('contacts'));

    }
}
