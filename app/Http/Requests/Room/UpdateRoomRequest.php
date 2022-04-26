<?php

namespace App\Http\Requests\Room;

use Illuminate\Foundation\Http\FormRequest;
class UpdateRoomRequest extends FormRequest
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
            'people' => 'required|integer|between:1,6',
            'floor' => 'required|integer',
            'number_room' => 'required|digits_between:3,5|unique:rooms,number_room,'.request()->id,
            'total_money' => 'required|integer',
            'description' => 'required',
            'image' => 'required',
        ];
    }
    public function Messages()
    {
        return [
            'people.required' => 'khong duoc de trong',
            'people.integer' => 'dinh dang khong hop le',
            'people.between:1,10' => 'So nguoi khong hop le',
            'floor.required' => 'khong duoc de trong',
            'floor.integer' => 'dinh dang khong hop le',
            'number_room.required' => 'khong duoc de trong',
            'number_room.unique' => 'Tên phòng đã tồn tại',
            'number_room.digits_between:3,5' => 'dinh dang khong hop le',
            'total_money.required' => 'khong duoc de trong',
            'total_money.integer' => 'dinh dang khong hop le',
            'description.required' => 'khong duoc de trong',
          ];
    }
}
