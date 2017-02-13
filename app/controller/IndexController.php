<?php

namespace app\controller;

use app\model\AdminModel;
use core\lib\controller;
use core\util\Cookies;
use core\util\dh2y\Url;
use core\util\Session;



class IndexController extends controller
{
    /**
     * 系统首页展示
     * @throws \Exception
     */
    public function index(){
        $this->display();
    }


    /**
     * 族长登录
     * @throws \Exception
     */
    public function login(){
        if(\core\dh2y::IS_POST()){
            $user = post('user');
            dump($user);die;
        }
        $this->display();
    }


    /**
     * 注册成为族长
     * @throws \Exception
     */
    public function register(){
        $this->display();
    }

    /**
     * 家族成员登录
     * @throws \Exception
     */
    public function memberLogin(){
        $this->display();
    }
    public function love(){
        $this->display();
    }

}