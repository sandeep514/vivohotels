<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model 
{

    protected $table = 'city';
    public $timestamps = true;
    public $fillable = ['name' , 'status'];
}