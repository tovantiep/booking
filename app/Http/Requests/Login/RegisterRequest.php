<?php

namespace App\Http\Requests\Login;

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
        return 
           [
                'name' => 'required|unique:users,name',
                'email' => 'required|unique:users,email',
                'password' => 'required',
                'confirmPassword' => 'required_with:password|same:password',
                'phone' => 'required',
                'address' => 'required'
           ];
    }

    public function Messages()
    {
        return ['name.required' => 'Không được để trống',
                'name.unique' => 'Tên đã tồn tại',
                'email.required' => 'Email không được để trống',
                'email.unique' => 'Email đã tồn tại',
                'password.required' => 'Password không được để trống',
                'confirmPassword.required_with' => 'RePassword không được để trống',
                'confirmPassword.same' => 'Password không trùng khớp',
                'phone.required' => 'SĐT không được để trống',
                'address.required' => 'Địa chỉ không được để trống'
            ];
    }
    
}
