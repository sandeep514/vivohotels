<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyType extends Model 
{

    protected $table = 'propertytype';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}