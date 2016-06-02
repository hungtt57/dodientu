<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CheckUserRequest extends Request
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
           'fullname' => 'required|max:255',
           'user_name' => 'required|min:8',
           'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',

        ];
    }
    public function messages(){
        return [
            'fullname.required' => 'Vui lòng nhập tên',
            'user_name.requỉed'=>'Vui lòng nhập user_name',
            'user_name.min' => 'Tên đăng nhập phải ít nhất 8 ký tự',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Bạn phải nhập đúng 1 định dạng email',
            'email.unique' => 'Địa chỉ email này đã có ngươi sử dụng',
            'password.requỉed'=>'Vui lòng nhập password',
            'password.min' => 'Mật khẩu phải ít nhất 6 ký tự'
        ];
    }
}
