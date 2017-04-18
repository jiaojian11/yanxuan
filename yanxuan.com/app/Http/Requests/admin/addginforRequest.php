<?php

namespace App\Http\Requests\admin;

use App\Http\Requests\Request;

class addginforRequest extends Request
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
            'gname'=>'required',
            'gnum'=>'required',
            'gprice'=>'required',
            'gintro'=>'required',
            'file'=>'required',
            'editorValue'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'gname.required'=>'商品名称必须添加',
            'gnum.required'=>'商品总数必须添加',
            'gprice.required'=>'商品单价必须添加',
            'gintro.required'=>'商品介绍必须添加',
            'file.required'=>'商品图片必须添加',
            'editorValue.required'=>'商品详情必须添加',
        ];
    }
}
