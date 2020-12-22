<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contactus extends Model 
{
    protected $fillable = [ 'name' , 'email' , 'mobile' , 'message' ];
    protected $table = 'contactus';
    public $timestamps = true;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
// starlight