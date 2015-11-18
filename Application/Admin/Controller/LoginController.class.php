<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
        if (IS_POST) {
            $post = I('post.');
            $this->show(D('User')->login($post));
        }
        else{
            $this->display();
        }  	
    }
}