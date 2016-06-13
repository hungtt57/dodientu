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
           'username' => 'required|min:6',
             'password' => 'required|min:6',

        ];
    }
    public function messages(){
        return [
      
            'username.required'=>'Vui lòng nhập username',
            'username.min' => 'Tên đăng nhập phải ít nhất 6 ký tự',
            'password.required'=>'Vui lòng nhập password',
            'password.min' => 'Mật khẩu phải ít nhất 6 ký tự'
        ];
    }
}
