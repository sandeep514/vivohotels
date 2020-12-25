<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactUs extends Model
{
    protected $fillable = [ 'name' , 'email' , 'mobile' , 'message' ];
    protected $table = 'contact_us';
    public $timestamps = true;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
// starlight
