<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyCategory extends Model
{

    protected $table = 'property_category';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}
