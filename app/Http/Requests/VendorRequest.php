<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;
use App\Store;
class VendorRequest extends FormRequest
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
      $id = $this->vendor ?? null;
        $rules = [
         'firstname'=>'required',
         'phone'=>'required',
         'email'  => 'required|unique:users,email',
         'store_email'  =>'required',
         'password' => 'required',
         'confirm_password' => 'required|same:password',
         'vendor_category_id'=>'required',
         'name'=>'required'
    
        ];

        if($id) {
            $rules['email'] = 'required|unique:users,email,'.$id;
       
            unset($rules['password']);
            unset($rules['confirm_password']);
        }
 
        return $rules;
    }
}
