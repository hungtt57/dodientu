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
           'name' => 'required|min:2|unique:products,name',
           'image' => 'required',
           'old_price' => 'required',
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'name.min'=>'Tên phải ít nhất 2 kí tự',
            'name.unique' => 'Tên sản phẩm bị trùng',
             'image.required' => 'Vui lòng chọn ảnh đại diện',
             'old_price.required' => 'Nhập giá hiện tại của sản phẩm'
        ];
    }
}
