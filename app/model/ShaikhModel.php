<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/14
 * Time: 13:25
 */

namespace app\model;


use core\lib\model;

class ShaikhModel extends model
{
    public static function tableName()
    {
        return 'shaikh';
    }

    /**
     * 得到族长账号信息
     * @param $name
     * @return bool
     */
    public function findShaikh($name){
        $result = $this->get($this->table,'*',array(
            'shaikhname'=>$name
        ));
        return $result;
    }
}