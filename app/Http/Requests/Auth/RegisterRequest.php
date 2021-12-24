<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
           'name' => 'required',
           'email' => 'required|unique:users',
           'password' => 'required',
           'repassword' =>'required_with:password|same:password',
           'phone' => 'required',
           'address' => 'required',
        ];
    }
    public function Messages()
    {
        return [
            'name.required' => 'ten khong duoc de trong',
            'email.required' => 'email khong duoc de trongg',
            'email.unique' => 'email da ton tai',
            'password.required' => 'password khong duoc de trong',
            'repassword.required_with' => 'repassword khong duoc de trong',
            'repassword.same' => 'password khong trung khop',
            'phone.required' => 'phone khong duoc de trong',
            'address.required' => 'address khong duoc de trong'
          ];
    }
}
