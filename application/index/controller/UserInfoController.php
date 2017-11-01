<?php
/**
 * Created by PhpStorm.
 * User: FrankZhang
 * Date: 11/1/2017
 * Time: 11:27 AM
 */

namespace app\index\controller;
use app\index\model\User;
use think\Session;

class UserInfoController extends MonBaseController
{
    public function login(){

        $data = User::get(function($query){
            $query->where([
                    'user_name'=>trim(input('user_name')),
                    'user_password'=>trim(md5(input('user_password'))),
                   // 'user_status'=>1
                ]);
        });

        if($data){
            if($data['user_status'] != "1"){
                $msg['status'] = "false";
                $msg['msg'] = "你的账户被禁用，请联系管理员";
                $this->error( "你的账户被禁用，请联系管理员");
            }else{
                $msg['status'] = "true";
                $msg['msg'] = "登入成功";
                $_SESSION['user_id'] = $data['user_id'];
                $_SESSION['user_name'] = $data['user_name'];
                $_SESSION['user_pid'] = $data['user_pid'];
                $this->success("登入成功");
            }

        }else{
            $this->error("用户名或密码错误");
        }

    }

    public function logout(){
       // Session::delete('user_id');
       // Session::delete('user_name');
        $_SESSION['user_id'] = null;
        $_SESSION['user_name'] = null;
        $this->success("退出成功",url('index/Index'));
    }


}