<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Input;
class CheckEditProductRequest extends Request
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
        $old_price = Input::get('old_price');
        return [
           'name' => 'required|min:2',
           'image' => 'mimes:jpeg,jpg,png',
           'old_price' => 'required'
           // 'new_price' => "min:100"
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'name.min'=>'Tên phải ít nhất 2 kí tự',
             'old_price.required' => 'Nhập giá hiện tại của sản phẩm',
             'image.mimes' => 'Ảnh đại diện phải là định dạng jpeg,jpg,png',
             // 'new_price.min' => 'Giá mới phải nhỏ hơn giá hiện tại'
        ];
    }
}
