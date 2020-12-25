<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyType extends Model
{

    protected $table = 'property_type';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}
