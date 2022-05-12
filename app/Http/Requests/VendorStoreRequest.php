<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendorStoreRequest extends FormRequest
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
       
        $rules = [
         'name'=>'required',
         'phone'=>'required',
         'vendor_category_id'=>'required',
         'bio'=>'required',
         'postalcode'=>'required',
         'city'=>'required',
         'province'=>'required'
      
        ];
          return $rules;
      
    }
}
