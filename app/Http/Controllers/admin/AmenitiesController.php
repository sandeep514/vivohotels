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
use App\Models\Amenities;

class AmenitiesController extends Controller
{
    public function index()
    {
        $amenities = Amenities::get();
        return view('admin.amenities.create' , compact('amenities'));
    }
    public function submitAmenities (Request $request){
        Amenities::truncate();
        foreach ($request->amenities as $key => $value) {        
            $faq = Amenities::create([
                        'name' => $value,
                        'status' => 1
                    ]);
        }
        return back();
    }
}