<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fillfaq extends Model 
{

    protected $table = 'faqfill';
    public $timestamps = true;
    public $fillable = ['faq' , 'amswer','propertyId'];

    public function getAnswers()
    {
    	return $this->belongsTo('App\Models\FAQ' , 'faq', 'id');
    }
}