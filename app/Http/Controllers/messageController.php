<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class messageController extends Controller
{
    function Addmessage(Request $request){
        $message = $request->input('message','');
        $sender = $request->input('sender','');

        if(!empty($message)){
            $t_div = date("Y-m-d H:i:s");
            DB::table('qunliao')->insert(['message'=>$message,'sender'=>$sender,'t_div'=>$t_div]);
            $temp = array('message'=>$message,'sender'=>$sender,'status'=>1,'info'=>'消息存储成功');
            $data = json_encode($temp);
            return $data;
        }else{
            $temp = array('message'=>$message,'sender'=>$sender,'status'=>0,'info'=>'不能发送空消息');
            $data = json_encode($temp);
            return $data;
        }
    }

    function Addmessage_crypt(Request $request){
        $k1 = $request->input('k1','');
        $k2 = $request->input('k2','');
        $message = $request->input('message','');
        $sender = $request->input('sender','');
        $message_mac = $request->input('message_mac','');
        $mANDmac = $request->input('mANDmac','');
        $miwen = $request->input('miwen','');
        $base64_encode_message_len =  intval($request->input('base64_encode_message_len',''), 10);;
        $message_mac_len =  intval($request->input('message_mac_len',''), 10);;


        //$message_mac_len = $request->input('message_mac_len','');

        if(!empty($message&&$message_mac&&$mANDmac&&$miwen&&$sender)){
            $t_div = date("Y-m-d H:i:s");
            DB::table('qunliao')->insert(['message'=>$message,
                                        'message_mac'=>$message_mac,
                                        'mANDmac'=>$mANDmac,
                                        'miwen'=>$miwen,
                                        'sender'=>$sender,
                                        'base64_message_len'=>$base64_encode_message_len,
                                        'message_mac_len'=>$message_mac_len,
                                        'k1'=>$k1,
                                        'k2'=>$k2,
                                        't_div'=>$t_div
                                    ]);

            $temp = array('status'=>1,'info'=>'加密消息发送成功');
            $data = json_encode($temp);
            return $data;
        }else{
            $temp = array('status'=>0,'info'=>'请填写完成信息再发送');
            $data = json_encode($temp);
            return $data;
        }



    }


    function show(Request $request){


      //  $message = $request->input('message','');
        $sender = $request->input('sender','');
        $message_list = DB::table('qunliao')->orderBy('id','asc')->get();
        $temp = array('sender'=>$sender,'message_list'=>$message_list,'status'=>1);
        $data = json_encode($temp);
        return $data;
    }




    function create_mac(Request $request){
        $message = $request->input('message','');
        //$sender = $request->input('sender','');
        $k1 = $request->input('k1','');
        $k2 = $request->input('k2','');

        if(empty($message)){
            $temp =['status'=>2,'info'=>'消息不能为空'];
            $data = json_encode($temp);
            return $data;
        }
        if(empty($k1)){
            $temp =['status'=>3,'info'=>'秘钥K1不能为空'];
            $data = json_encode($temp);
            return $data;
        }
        if(empty($k2)){
            $temp =['status'=>4,'info'=>'秘钥k2不能为空'];
            $data = json_encode($temp);
            return $data;
        }


        if(!empty($message&&$k1&&$k2)){

            if(strlen($k2) != 8){
                $temp =['status'=>5,'info'=>'秘钥k2长度不对，请输入8位有效字符'];
                $data = json_encode($temp);
                return $data;
            }

            /*用hash函数生成mac码*/
            $message_mac = hash_hmac('sha512', $message, $k1);
            $message_mac_len = strlen($message_mac);//计算mac码的长度

            $base64_encode_message = base64_encode($message); //将明文消息转成base64编码
            $base64_encode_message_len = strlen($base64_encode_message);

            $mANDmac = $base64_encode_message.$message_mac;/*message|mac结合之后*/
            $mANDmac_len = strlen($mANDmac);


            // 为 CBC 模式创建随机的初始向量
            $iv_size = mcrypt_get_iv_size(MCRYPT_DES, MCRYPT_MODE_CBC);
            $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
            $ciphertext2 = mcrypt_encrypt(MCRYPT_DES, $k2, $mANDmac, MCRYPT_MODE_CBC, $iv);/*对mANDmac整体进行des加密，采用cbc模式，初始向量随机生成*/
            //$ciphertext2_len = strlen($ciphertext2);
            //将初始向量附加在密文之后，以供解密时使用
            $ciphertext1 = $iv . $ciphertext2;
          // $ciphertext1_len = strlen($ciphertext1);
            //对密文进行 base64 编码
            $miwen = base64_encode($ciphertext1);
            $miwen_len = strlen($miwen);


            $temp = array(
                'message'=>$message,
                'k1'=>$k1,
                'message_mac'=>$message_mac,
                'message_mac_len'=>$message_mac_len,
                'base64_encode_message'=>$base64_encode_message,
                'base64_encode_message_len'=>$base64_encode_message_len,
                'mANDmac'=>$mANDmac,
                'mANDmac_len'=>$mANDmac_len,
                'iv_size'=>$iv_size,
                'miwen'=>$miwen,
                'miwen_len'=>$miwen_len,
                'status'=>1
            );
            $data = json_encode($temp);
            return $data;
        }

    }


    function decrypt(Request $request){

        $message_id = $request->input('message_id','');
        $k2_dec = $request->input('k2_dec','');
        $k1_dec = $request->input('k1_dec','');

        if(empty($k2_dec)){
            $temp =['status'=>2,'info'=>'秘钥k2不能为空','message_id'=>$message_id];
            $data = json_encode($temp);
            return $data;
        }else if(empty($k1_dec)){
            $temp =['status'=>3,'info'=>'秘钥k1不能为空'];
            $data = json_encode($temp);
            return $data;
        }else{
            $message_info = DB::table('qunliao')->where('id',$message_id)->first();

            if($k2_dec == $message_info->k2){
                $miwen = $message_info->miwen;
                $base64_message_len = $message_info->base64_message_len;

                $miwen_dec_2 = base64_decode($miwen);
                $iv_size = mcrypt_get_iv_size(MCRYPT_DES, MCRYPT_MODE_CBC);
                // 初始向量大小，可以通过 mcrypt_get_iv_size() 来获得
                $iv_dec = substr($miwen_dec_2, 0, $iv_size);
                // 获取除初始向量外的密文
                $miwen_dec = substr($miwen_dec_2, $iv_size);
                /*使用des解密算法解密*/
                $mANDmac_dec = mcrypt_decrypt(MCRYPT_DES, $k2_dec, $miwen_dec, MCRYPT_MODE_CBC, $iv_dec);
                /*分离明文信息和mac,mac长度128,其结构为base64_encode_message+message_mac*/
                $base64_message_dec = substr($mANDmac_dec,0,$base64_message_len);//base64的消息明文
                $message_mac_old = substr($mANDmac_dec,$base64_message_len);//发送方发来的mac

                $message_dec = base64_decode($base64_message_dec);//base64解密后的明文消息

                $message_mac_new = hash_hmac('sha512', $message_dec, $k1_dec);

                $temp = array(
                    'message_info'=>$message_info,
                    'miwen'=>$miwen,
                    'mANDmac_dec'=>$mANDmac_dec,
                    'base64_message_dec'=>$base64_message_dec,
                    'message_mac_old'=>$message_mac_old,
                    'message_dec'=>$message_dec,
                    'message_mac_new'=>$message_mac_new,
                    'status'=>1);
                $data = json_encode($temp);
                return $data;
            }else{
                $temp =['status'=>4,'info'=>'秘钥k2错误，身份认证失败，请确认后再尝试'];
                $data = json_encode($temp);
                return $data;
            }


        }

       /* if(!empty($k1_dec&&$k2_dec)){

            }*/

        }

}
