<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditOrderRequest extends Request
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
           'tenkh' => 'required',
           'emailkh' => 'required|email',
           'sdtkh' => 'required',
            'diachikh' => 'required',
            'ngaynhankh' => 'required',
        ];
    }
    public function messages(){
        return [
            'ten.required' => 'Vui lòng nhập tên khách hàng',
            'email.required' => 'Vui lòng nhập Email',
            'sdtkh.required' => 'Vui lòng nhập số điện thoại',
            'diachikh.required' => 'Vui lòng nhập địa chỉ khách hàng',
            'ngaynhankh.required' => 'Vui lòng nhập ngày nhận',
            'emailkh.email' => 'Email phải đúng định dạng'
            
          
        ];
    }
}
