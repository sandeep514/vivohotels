<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;
use Session;

class ContactControler extends Controller
{

	public function submitContactUs(Request $request)
    {
        $this->validate($request , [
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|min:11|numeric',
            'message' => 'required'
        ]);

        $contactus = Contactus::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'message' => $request->message
        ]);

        if( $contactus ){
            Session::flash('message', "Your contact query send successfully.");
            return back();
        }else{
            Session::flash('error', "Something went wrong.");
            return back();
        }
    }
}
