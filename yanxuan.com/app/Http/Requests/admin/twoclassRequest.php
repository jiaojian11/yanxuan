<?php

namespace App\Http\Requests\admin;

use App\Http\Requests\Request;

class twoclassRequest extends Request
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
            'gc_pid'=>'required',
            'gc_title'=>'required',
            'pic'=>'required'
            
        ];
    }

    public function messages()
    {
        return [
            'gc_pid.required'=>'请选择要添加的二级菜单所属的一级类别',
            'gc_title.required'=>'请输入二级菜单',
            'pic.required'=>'请选择二级菜单图片'
        ];
    }
}
