<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Requests\AddProperty;
use App\Models\Property;
use Illuminate\Support\Facades\File;
use Mail;
use App\Models\FAQ;
use Session;


class FAQController extends Controller
{

    public function index()
    {
        $faq = FAQ::get();
        return view('admin.FAQ.create' , compact('faq'));
    }

    public function submitFAQ(Request $request){
        $faq = FAQ::create([
                    'question' => $request->faq,
                    'status' => 1
                ]);
        // FAQ::truncate();
        // foreach ($request->faq as $key => $value) {        
        // }
        return back();
    }
    
    public function deleteFAqQuestion($id)
    {
        FAQ::whereId($id)->delete();
        return back();
    }
    
}