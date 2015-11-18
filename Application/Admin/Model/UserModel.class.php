<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model {
    public function login($post){
    	$username = $post['username'];
        $password = $post['password'];
        if ($username == '' || $password == '') {
            return "请输入正确的用户名和密码";
        }

        if(M('User')->where($post)->count() == 0){
            return "用户名或者密码错误";
        }

        if(M('User')->where($post)->count() > 0){
            return "登录成功";
        }

    }
}