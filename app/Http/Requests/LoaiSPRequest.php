<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LoaiSPRequest extends Request
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
            //
        'Ten'=>'required|min:3|max:255'
        ];
    }
    public function messages()
    {
        return[
        'Ten.required'=>'Bạn chưa nhập tên loại tin',
        'Ten.min'=>'Tên phải có ít nhật 3 ký tự',
        'Ten.max'=>'Tên không được quá 255 ký tự',

        ];
    }
}
