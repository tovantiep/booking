<?php

namespace App\Http\Requests\Room;

use Illuminate\Foundation\Http\FormRequest;

class CreateRoomRequest extends FormRequest
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
            'people' => 'required|integer|between:1,10',
            'floor' => 'required|integer',
            'number_room' => 'required|unique:rooms,number_room|integer|digits_between:3,5',
            'total_money' => 'required|integer',
            'image' => 'required|max:4',
            'description' => 'required',
        ];
    }
    public function Messages()
    {
        return [
            'people.required' => 'Không được để trống',
            'people.integer' => 'Định dạng không hợp lệ',
            'people.between:1,10' => 'Số người không hợp lệ',
            'floor.required' => 'Không được để trống',
            'floor.integer' => 'Định dạng không hợp lệ',
            'number_room.required' => 'Không được để trống',
            'number_room.unique' => 'Tên phòng đã tồn tại',
            'number_room.digits_between:3,5' => 'Định dạng không hợp lệ',
            'total_money.required' => 'Không được để trống',
            'total_money.integer' => 'Định dạng không hợp lệ',
            'image.required' => 'Không được để trống',
            'image.max' => 'Không được để quá 4 ảnh',
            'description.required' => 'Không được để trống',
          ];
    }
}
