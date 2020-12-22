<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model 
{

    protected $table = 'FAQ';
    public $timestamps = true;
    public $fillable = ['question' , 'status'];

    public function getAnswers()
    {
    	return $this->belongsTo('App\Models\Fillfaq' , 'id', 'faq');
    }

}