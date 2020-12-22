<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Amenities extends Model 
{
    protected $table = 'amenities';
    public $timestamps = true;
    public $fillable = ['name','status'];
}