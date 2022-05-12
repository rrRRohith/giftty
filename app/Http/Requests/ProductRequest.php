<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
         'name'=>'required',
         'weight'=>'required|numeric',
         'seo_title'=>'required',
         'seo_keyword'=>'required',
         'seo_description'=>'required',
         'sku'=>'required',
         'width'=>'required',
         'height'=>'required',
         'breadth'=>'required'



        ];
    }
}
