<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Validator;
use Hash;
use Redirect;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //注册页
    public function Register()
    {
        return view('users.register');
    }

    public function Create(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'username'=>'required|alpha|min:2',
            'email'=>'required|email|unique:users',
            'password'=>'required|alpha_num|between:6,12|confirmed',
            'password_confirmation'=>'required|alpha_num|between:6,12'
        ]);
        if ($validator->fails()){
            return Redirect('admin/register')->with('mag','Input data is incorrect, please try again!')->withErrors($validator)->withInput();
        }else{
            $user = new Users;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            return Redirect('admin/login')->with('msg', 'Have fun!');
        }
        /*if (request()->method('post')){
            $data=request()->only(['username','email','password']);

            $result=(new Users)->test($data);
            dump($result);
            if ($result==1){
                $msg=[
                    'code'=>1,
                    'msg'=>'注册成功',
                    'url'=>url('admin/login')
                ];
            }else{
                $msg=[
                    'code'=>0,
                    'msg'=>$result
                ];
            }
            return $msg;
        }*/
    }



    public function Login()
    {
        return view('users.login');
    }

    public function ecter(){

    }
}
