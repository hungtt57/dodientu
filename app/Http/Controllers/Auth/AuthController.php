<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Request;
use Input;
use Auth;
use Session;
use Redirect;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|max:255',
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
      public function getLogin() {
    
        return view('auth/login');
    }
      public function postLogin(Request $request)
    {
           
        $validator = Validator::make(Input::all(),
            array(
                'username' => 'required',        
            )
        );
        $userName = Input::get('username');
        $password = Input::get('password');
        
      
            if($validator->fails()) {
                return redirect('auth/login')
                            ->withErrors($validator);
            } else {

               // echo $userName; echo $password;die;
                        if (Auth::attempt(array('username' => $userName, 'password' => $password)))
                        {

                            return redirect('admin/dashboard');

                        }
                        if (Auth::attempt(array('email' => $userName, 'password' => $password)))
                        {

                                return redirect('admin/dashboard');

                        }
                       
                        return Redirect::back()->withInput()->with('message','Email hoặc mật khẩu bị sai'); 

                    
                }

                return Redirect::back()->with('message','Tên Đăng nhập hoặc mật khẩu bị sai');



    }
      public function getLogout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
