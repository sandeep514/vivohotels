<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyMeta extends Model
{

    protected $table = 'property_meta';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}
