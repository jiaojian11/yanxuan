<?php

namespace App\Http\Requests\admin;

use App\Http\Requests\Request;

class delclassRequest extends Request
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
            'gc_title'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'gc_title.required'=>'请选择要删除的一级类别'
        ];
    }
}
