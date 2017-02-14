<?php

namespace app\controller;

use app\model\AdminModel;
use app\model\ShaikhModel;
use core\lib\controller;
use core\util\dh2y\Session;
use core\util\dh2y\Url;




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

            $model = new ShaikhModel();
            $shaikh=$model->findShaikh($user['name']);
            if($shaikh&&md5($user['password'])==$shaikh['password']){
                Session::start();
                Session::set('admin',$shaikh);
                redirect(Url::toRoute(['index/love']));
            }else{
                $this->assign('error','用户名或密码错误');
            }

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