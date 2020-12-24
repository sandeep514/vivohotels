<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Requests\AddProperty;
use App\Models\Property;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Mail;
use Session;
use Hash;


class PropertyController extends Controller
{
    public function index()
    {
        return view('admin.property.addProperty');
    }
    public function listProperty(){
        $property = Property::get();
        return View('admin.property.listProperty' , compact('property'));

    }
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'confpassword' => 'required|same:password|min:6',
        ]);

        $createProperty = new User;
        $createProperty->name              = $request->title;
        $createProperty->email              = $request->email;
        $createProperty->status             = 0;
        $createProperty->role_id             = 2; // role id 2 is for property
        $createProperty->password           = Hash::make($request->password);
        $createProperty->save();

        $link = 'http://vivohotels.webcooks.in/room/details/'.base64_encode($createProperty->id);

        $data = array(
            'name'=>"Stay with vivo",
            'link' => 'http://vivohotels.webcooks.in/property/login',
            'name' => $request->title,
            'email' => $request->email,
            'password' => $request->password,
            'data' => '<div><p>Hi'.$request->title.',</p><p>Welcome to Formyoula Mobile Forms. Please find your login details below.</p><p><b>Email:</b> '.$request->email.'</p><p><b>Password:</b> '.$request->password.'</p><p><b>Click here: </b><a href="'.$link.'">Go to control panel</a></p><p>Thank You,<br/></p></div>'

        );

        \Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('sandy.singh51480@gmail.com', 'stay with vivo')->subject('Your login details')->setContentType('text/plain');
            $message->from('support@vivohotels.webcooks.in','Stay with vivo');

        });

        Session::flash('msg' , 'updated');
        return back();


        // if( $createProperty ){
        //     $path = public_path('property/'.$createProperty->id);
        //     File::makeDirectory($path, $mode = 0777, true, true);

        //     if($request->hasFile('propertyImage')) {
        //         $image       = $request->file('propertyImage');
        //         $filename    = $image->getClientOriginalName();

        //         $image_resize = Image::make($image->getRealPath());
        //         $image_resize->resize(600, 600);
        //         $image_resize->save(public_path('property/'.$createProperty->id.'/'.$filename));
        //         Property::where('id' , $createProperty->id)->update([ 'propertyImage' => $filename ]);
        //     }

        //     if($request->hasFile('otherImages')) {
        //         $otherImg = [];

        //         foreach( $request->file('otherImages') as $k => $v){
        //             $image       = $v;
        //             $filename    = $image->getClientOriginalName();

        //             $image_resize = Image::make($image->getRealPath());
        //             $image_resize->resize(600, 600);
        //             $image_resize->save(public_path('property/'.$createProperty->id.'/'.$filename));
        //             $otherImg[] = $filename;
        //         }
        //         $encodedOtherImages  = json_encode($otherImg);
        //         Property::where('id' , $createProperty->id)->update([ 'otherImages' => $encodedOtherImages ]);
        //     }
        // }

        // return back()->withErrors(['success' => " New Property add successfully."]);

//        dd($request->all());
    }

    public function changeStatus($id){
        $property = Property::whereId($id)->first();
        if( $property != null ){
            if( $property->status == 0 ){
                Property::whereId($id)->update(['status' => 1]);
            }else{
                Property::whereId($id)->update(['status' => 0]);
            }
        }

        return back();
    }
}
