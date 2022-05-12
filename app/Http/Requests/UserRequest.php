<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;

class UserRequest extends FormRequest
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

   
       $id = $this->user ?? null;

        $rules = [
         'firstname'=>'required',
         'lastname'=>'required',
         'email'  => 'required|unique:users,email',
         'password' => 'required',
        // 'bio'=>'required'
        ];

        if($id) {
            $rules['email'] = 'required|unique:users,email,'.$id;
            unset($rules['password']);
        }
      
        return $rules;
      
    }
   
}
