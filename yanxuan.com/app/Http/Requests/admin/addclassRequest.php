<?php

namespace App\Http\Requests\admin;

use App\Http\Requests\Request;

class addclassRequest extends Request
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
            'title'=>'required',
            'info'=>'required',
            'pic'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'请输入一级类名',
            'info.required'=>'请输入一级简介',
            'pic.required'=>'请添加一级类图片'
        ];
    }

}
