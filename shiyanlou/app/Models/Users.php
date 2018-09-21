<?php

namespace App\Models;
use App\Http\Requests\userPostRequest;


use Validator;
use App\Http\Controllers\Controller;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //注册验证
    public function test($data)
    {

        $rule=[
            'username'=>'required|alpha|min:2',
            'email'=>'required|email|unique:users',
            'password'=>'required,alpha_num|between:6,12|confirmed',
            'password_confirmation'=>'required|alpha_num|beween:6,12'
        ];
        $msg=[
            'username.required'=>'用户名不能为空',
            'email.email'=>'邮箱格式不争取',
            'password.required'=>'密码不能为空',
            'password.confirmed'=>'密码不一致'
        ];
        $validator=Validator::make($data,$rule,$msg);
        if ($validator->fails()){
            return $validator->errors()->first();
        }else{
            $result=$this->create($data);
            if ($result){
                return 1;
            }else{
                return "注册失败";
            }
        }
    }
    /*public function Create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|alpha|min:2',
            'email' => 'required|email|unique:users',
            'password' => 'required|alpha_num|between:6,12|confirmed',
            'password_confirmation' => 'required|alpha_num|between:6,12'
        ]);
        if ($validator->fails()) {

            return Redirect::to('admin/register')->with('message', '请在输入框输入数据')->withErrors($validator)->withInput();

        }else {
            echo "2";
            $user= new User;
            $user->username=$request->username;
            $user->email=$request->email;
            $user->password=$request->password;

            $user->save();
            return Redirect::to('admin/login')->with('message','Have fun!');
        }
    }*/
}
