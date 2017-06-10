<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class loginController extends Controller
{
    function login(Request $request){


       $qq_num = $request->input('qq_num','');
       $password = $request->input('password','');

       $user = DB::table('user')->where('qq_num',$qq_num)->where('password',$password)->first();

       if($user){
           //$userinfo = DB::table('user')->where('qq_num',$qq_num)->first();
           /*return view('index')->with('userinfo',$userinfo);*/
           //$request->session()->put('user', $user);
           $list = DB::table('user')->where('qq_num','!=',$qq_num)->get();
           $temp = array('status'=>'1','info'=>'登陆成功','nick_name'=>$user->nick_name,'character'=>$user->character,'list'=>$list);
           $data = json_encode($temp);
           return $data;
       }else{
           $temp = array('status'=>'0','info'=>'登陆失败');
           $data = json_encode($temp);
           return $data;
       }

    }



function index(){


        return view('index');
}


}
