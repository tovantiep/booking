<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required'
        ];
    }
    public function Messages()
    {
      return [
        'email.required' => 'email khong duoc de trong',
        'email.email' => 'email khong dung dinh dang',
        'password.required' => 'password khong duoc de trong'
      ];
    }
}
