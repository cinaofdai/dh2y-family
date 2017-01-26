<?php

namespace app\controller;

use app\model\AdminModel;
use core\lib\controller;
use core\util\Cookies;
use core\util\dh2y\Url;
use core\util\Session;



class IndexController extends controller
{
    public function index(){


        $this->display();
    }

}