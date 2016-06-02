<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateProductRequest extends Request
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
           'ten' => 'required|min:2|unique:products,ten',
           'masp' => 'required',
           'anhdaidien' => 'required|mimes:jpeg,jpg,png',
           'gia' => 'required',
        ];
    }
    public function messages(){
        return [
            'ten.required' => 'Vui lòng nhập tên sản phẩm',
            'ten.min'=>'Tên phải ít nhất 2 kí tự',
            'ten.unique' => 'Tên sản phẩm bị trùng',
            'masp.required' => 'Nhập mã sản phẩm',
             'anhdaidien.required' => 'Chọn ảnh đại diện',
             'gia.required' => 'Nhập giá sản phẩm',
             'anhdaidien.mimes' => 'Ảnh đại diện phải là định dạng jpeg,jpg,png',
          
        ];
    }
}
