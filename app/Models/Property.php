<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model 
{
    protected $table = 'property';
    protected $dates = ['deleted_at'];
    public $timestamps = true;
    use SoftDeletes;

    protected $fillable = array('title','description','location','city','no_of_bedrooms','no_of_double_beds','no_of_single_beds','max_guests','min_guests','min_might_stay','other_person_price','amenities','about_property','before_buy','about_meal','question','address','mobile','email','propertyType','propertyRaiting','propertyCategory','regular_price','offer_price','propertyImage','otherImages','timmingFrom','password','timmingTo','availability','availableRooms','cancellation_pdf');


    public function PropertyType()
    {
    	return $this->belongsTo('App\Models\PropertyType' , 'propertyType' , 'id');
    }

    public function PropertyCategory()
    {
    	return $this->belongsTo('App\Models\PropertyCategory' , 'propertyCategory' , 'id');
    }

    public function PropertyFAQ()
    {
        return $this->hasMany('App\Models\Fillfaq', 'propertyId' , 'id' );
    }
 
    public function PropertyRooms()
    {
        return $this->hasMany('App\Models\PropertyRoom', 'product_id' , 'id' );
    }
}