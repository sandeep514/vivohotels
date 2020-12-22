<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class MainController extends Controller
{
    public function signin()
    {
    	return view('admin.sign-in');
    }
    public function index()
    {
    	$data = [] ; 
  		//	Mail::send(['text'=>'admin.mail.mail'], $data, function($message) {
		// 	$message->to('sandy.singh51480@gmail.com', 'Testing mail')->subject('Laravel Basic Testing Mail');
		// 	$message->from('support@vivohotels.webcooks.in','vivo hotels');
		// });
		// \Mail::send(['text'=>'admin.mail.mail'], $data, function($message) {
  //                           $message->to('support@thediscountindia.com', 'Discount India')->subject('Voucher Redeemed');
  //                           $message->from('discountindia98@gmail.com','Discount India');
  //                       });
        return view('admin.index');
    }
}