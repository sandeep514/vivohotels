<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProperty extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "title"             => 'required',
            "description"       => 'required',
            "address"           => 'required',
            "mobile"            => 'required',
            "email"             => 'required|email',
            "propertyType"      => 'required',
            "propertyRaiting"   => 'required',
            "propertyCategory"  => 'required',
            "regular_price"     => 'required',
            "offer_price"       => 'required',
            "timmingFrom"       => 'required',
            "timmingTo"         => 'required',
            "propertyImage"     => 'required',
            "otherImages"       => 'required'
        ];
    }
}
