<?php

namespace App\Http\Requests\admin;

use App\Http\Requests\Request;

class addmakersRequest extends Request
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
            'm_name'=>'required',
            'pic'=>'required',
            'm_info'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'm_name.required'=>'请输入请输入制造商名称',
            'pic.required'=>'请添加制造商图像',
            'm_info.required'=>'请输入制造商简介'
        ];
    }
}
