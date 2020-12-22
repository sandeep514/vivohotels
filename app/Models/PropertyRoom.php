<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyRoom extends Model 
{
    protected $table = 'property_room';
    protected $dates = ['deleted_at'];
    public $timestamps = true;

    protected $fillable = array('product_id','title','no_of_double_bedrooms','no_of_single_beds','amenities','room_regular_price','room_offer_price','room_about_property','room_availability');

}