<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
                'name' => 'required|unique:categories,name',
                'image' => 'required|image|mimes:jpg,png,jpeg',
            ];
    }
    public function Messages()
    {
      return [
            'name.required' => 'Không được để trống',
            'name.unique' => 'Tên đã tồn tại',
            'image.required' => 'Không được để trống',
            'image.image' => 'Ảnh không đúng định dạng',
            'image.mimes' => 'File ảnh phải có đuôi là jpg, png, jpeg',
            ];
    }
}
