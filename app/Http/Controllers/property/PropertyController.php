<?php

namespace App\Http\Controllers\property;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Models\Property;
use App\Models\PropertyCategory;
use App\Models\Amenities;
use App\Models\FAQ;
use App\Models\City;
use App\Models\PropertyRoom;
use Session;
use Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;
use App\Models\Fillfaq;

class PropertyController extends Controller
{
    public function listProperty(Request $request)
    {
        $amenities = Amenities::get();
        $faq = FAQ::get();
        $city = City::orderBy('name' , "ASC")->get();
        $email = Auth::guard('propertyAdmin')->user()->email;
        $property = Property::where('email' , $email)->get();

        return view( 'propertyAdmin.property.listProperty' , compact( 'property' , 'amenities' , 'faq' , 'city') );
    }

    public function submitProperty(Request $request){
        dd($request->all());
        $propertyId = $request->id;
        PropertyRoom::where(['product_id' => $propertyId])->delete();

        if( $request->has('room') ){
            foreach ($request->room as $key => $value) {
                $room_availability = 0;
                if( array_key_exists('room_availability', $request->all()) ){
                    $room_availability = 1;
                }
                PropertyRoom::create([
                    'product_id'                => $propertyId,
                    'title'                     => $value['title'],
                    'no_of_double_bedrooms'     => $value['no_of_double_bedrooms'],
                    'no_of_single_beds'         => $value['no_of_single_beds'],
                    'amenities'                 => json_encode($value['amenities']),
                    'room_regular_price'        => 0,
                    'room_offer_price'          => 0,
                    'room_about_property'       => $value['room_about_property'],
                    'room_availability'         => $room_availability,
                ]);

            }
        }

        $data = [];
        Fillfaq::where(['propertyId' => $propertyId])->delete();
        foreach( $request->question as $k => $v ){
            foreach( $v as $ke => $val){
                Fillfaq::create([
                    'faq' => $ke,
                    'amswer' => $val,
                    'propertyId' => $propertyId
                ]);
            }
        }


        if( $request->has('cancelPolicy') ){
            $request->validate(['cancelPolicy' => 'mimes:pdf']);
        }

        if( $request->has('availability') ){

        }else{
            $request['availability'] = "off";
        }

        if( $request->has('add_description') ){
            $request['description'] = $request->add_description;
        }

        foreach($request->except('room','add_description','question','cancelPolicy' , 'otherImages','propertyImage','_token','id') as $k => $v){
            if( is_array($v) ){
                $data[$k] = json_encode($v);
            }else{
                $data[$k] = $v;
            }
        }

        $previousOtherImag = [];
        $propertyDet = Property::where('id' ,$propertyId)->get();
        if( $propertyDet->count() > 0 ){
            $otherImg = $propertyDet[0]->otherImages;
            $previousOtherImag = json_decode( $otherImg , true);
        }

        $updateProperty = Property::where('id' ,$propertyId)->update($data);
        if( $updateProperty ){

            $path = public_path('property/'.$propertyId);
            File::makeDirectory($path, $mode = 0777, true, true);

            if($request->hasFile('propertyImage')) {
                $image       = $request->file('propertyImage');
                $filename    = $image->getClientOriginalName();

                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(600, 600);
                $image_resize->save(public_path('property/'.$propertyId.'/'.$filename));
                Property::where('id' , $propertyId)->update([ 'propertyImage' => $filename ]);
            }

            if($request->hasFile('cancelPolicy')) {
                $image       = $request->file('cancelPolicy');
                $filename    = $image->getClientOriginalName();
                $destination = 'property/'.$propertyId;
                $image->move($destination , $filename);

                Property::where('id' , $propertyId)->update([ 'cancellation_pdf' => $filename ]);
            }

            if($request->hasFile('otherImages')) {
                $otherImg = [];

                foreach( $request->file('otherImages') as $k => $v){
                    $image       = $v;
                    $filename    = $image->getClientOriginalName();

                    $image_resize = Image::make($image->getRealPath());
                    $image_resize->resize(600, 600);
                    $image_resize->save(public_path('property/'.$propertyId.'/'.$filename));
                    $otherImg[] = $filename;
                }

                $encodedOtherImages  = json_encode(array_merge( $otherImg , $previousOtherImag ));
                Property::where('id' , $propertyId)->update([ 'otherImages' => $encodedOtherImages ]);
            }
        }
        return back();
    }

    public function editProperty($id)
    {
        $amenities = Amenities::get();
        $faq = FAQ::with(['getAnswers'])->get();
        $city = City::orderBy('name' , "ASC")->get();
        $PropertyCategory = PropertyCategory::get();
        $PropertyRoom = PropertyRoom::where('product_id' , $id)->get();

        $property = Property::where(['id' => $id])->with(['PropertyFAQ' => function($query) {
            return $query->with(['getAnswers']);
        }])->first();
        return view( 'propertyAdmin.property.editProperty' , compact( 'PropertyRoom','PropertyCategory', 'property' , 'amenities' , 'faq' , 'city') );
    }

    public function createProperty()
    {
        $amenities = Amenities::get();
        $faq = FAQ::with(['getAnswers'])->get();
        $city = City::orderBy('name' , "ASC")->get();
        $PropertyCategory = PropertyCategory::get();

        return view( 'propertyAdmin.property.createProperty' , compact( 'PropertyCategory' , 'amenities' , 'faq' , 'city') );
    }

    public function saveProperty(Request $request)
    {
        $property = Property::create($request->except('_token'));

        if( $property ){
            if( $updateProperty ){
                $path = public_path('property/'.$propertyId);
                File::makeDirectory($path, $mode = 0777, true, true);

                if($request->hasFile('propertyImage')) {
                    $image       = $request->file('propertyImage');
                    $filename    = $image->getClientOriginalName();

                    $image_resize = Image::make($image->getRealPath());
                    $image_resize->resize(600, 600);
                    $image_resize->save(public_path('property/'.$propertyId.'/'.$filename));
                    Property::where('id' , $propertyId)->update([ 'propertyImage' => $filename ]);
                }

                if($request->hasFile('otherImages')) {
                    $otherImg = [];

                    foreach( $request->file('otherImages') as $k => $v){
                        $image       = $v;
                        $filename    = $image->getClientOriginalName();

                        $image_resize = Image::make($image->getRealPath());
                        $image_resize->resize(600, 600);
                        $image_resize->save(public_path('property/'.$propertyId.'/'.$filename));
                        $otherImg[] = $filename;
                    }

                    $encodedOtherImages  = json_encode($otherImg);
                    Property::where('id' , $propertyId)->update([ 'otherImages' => $encodedOtherImages ]);
                }
            }
        }
        return back();
    }

    public function deleteOtherImages($propertyId , $index)
    {
        $property = Property::whereId($propertyId)->get();


        if( $property->count() > 0 ){
            $propertyOther = $property[0]->otherImages;
            $propertyOtherArray = json_decode( $propertyOther ,true );

            unset($propertyOtherArray[$index]);
            $otherImages = json_encode($propertyOtherArray);

            Property::whereId($propertyId)->update(['otherImages' => $otherImages]);
        }else{
            Session::flash('error' , 'No Image found');
        }
        return back();
    }


}
