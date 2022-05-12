<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiscountRequest extends FormRequest
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
          
          'code'=>'required|alpha_num',
          'start_time'=>'required',
          'end_time'=>'required',
          'min_amount'=>'required|numeric',
          'max_usage'=>'required|numeric',
          'value'=>'required|numeric',
          'value_type'=>'required|in:amount,percentage'

        ];
    }
}
