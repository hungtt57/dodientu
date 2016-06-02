<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CheckThanhtoanRequest extends Request
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
            'ngaynhankh' => 'required',
            'diachikh' => 'required',
        ];

    }
    public function messages(){
        return [
            'tenkh.required' => 'Vui lòng nhập tên khách hàng',
        
            'emailkh.required' => 'Vui lòng nhập email' ,
            'emailkh.email' => 'Email phải đúng định dạng',
            'sdtkh.required' => 'Vui lòng nhập số điện thoại',
            'ngaynhankh.required' => 'Vui lòng chọn ngày nhận hàng',
            'diachikh.required' => 'Vui lòng nhập địa chỉ nhận hàng'
        ];
    }
}
