<?php
/**
 * 基类控制器
 */

namespace app\controller;


use core\lib\controller;
use core\util\dh2y\Session;

class BaseController extends controller
{
    public function __construct()
    {
        parent::__construct();

        //判断是否登录或登录框

    }
}