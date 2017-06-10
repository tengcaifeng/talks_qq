<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class registerController extends Controller
{
    function register(Request $request){
        $register_qq_num = $request->input('register_qq_num','');
        $register_nick_name = $request->input('register_nick_name','');
        $register_password = $request->input('register_password','');
        $register_character = $request->input('register_character','');

        if(empty($register_qq_num)){
            $temp = [
               'status' => 1,
                'info'  => 'qq号不能为空'
            ];
            $data = json_encode($temp);
            return $data;
        }

        if(empty($register_password)){
            $temp = [
                'status' => 2,
                'info'  => '密码不能够为空'
            ];
            $data = json_encode($temp);
            return $data;
        }


        $user_qq_num = DB::table('user')->where('qq_num',$register_qq_num)->first();
        if(!empty($user_qq_num)){
            $temp = [
                'status' => 3,
                'info'  => 'qq号已存在，请从新设置'
            ];
            $data = json_encode($temp);
            return $data;
        }else{
            DB::table('user')->insert([
                'qq_num' => $register_qq_num,
                'nick_name' => $register_nick_name,
                'password' => $register_password,
                'character' => $register_character
            ]);

            $temp = [
                'status' => 0,
                'info'  => '注册成功'
            ];
            $data = json_encode($temp);
            return $data;

        }



    }
}
