<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Session;
use App\Models\Property;

class DestinationControler extends Controller
{

	public function index()
    {
        $property = Property::where('status' , 1)->get();
        return view('front.destinations' , compact('property'));
    }

    public function roomDetails($id)
    {
        $base64Decode = base64_decode($id);
        $propertyDetail = Property::where(['id' => $base64Decode])->with(['PropertyRooms','PropertyType','PropertyCategory' , 'PropertyFAQ' => function($query){
            return $query->with(['getAnswers']);
        }])->first();

        return view( 'frontProperty.index' , compact('propertyDetail') );
    }
}
