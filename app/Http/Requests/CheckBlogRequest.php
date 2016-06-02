<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CheckBlogRequest extends Request
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
            'title' => 'required|min:2|unique:blog,title',
            'image' => 'required|mimes:jpeg,jpg,png',
            'content' => 'required'
        ];

    }
    public function messages(){
        return [
            'title.required' => 'Vui lòng nhập tiêu đề',
            'title.min' => 'Tiêu đề ít nhất là 2 ký tự',
            'title.unique' => 'Tiêu đề bị trùng',
             'image.required' => 'Chọn ảnh đại diện',
             'image.mimes' => 'Ảnh đại diện phải là định dạng jpeg,jpg,png',
             'content.required' => 'Vui lòng nhập nội dung'

        ];
    }
}
