<?php
/**
 * Created by PhpStorm.
 * User: hbl
 * Date: 2021/3/2
 * Time: 21:32
 */

namespace app\student\controller;


use think\Controller;
use think\Db;
use think\facade\Session;

class Ext extends  Controller
{
    public  function  index(){
        $info=Session::get('in');
        $db=Db::table('image')
            ->where('id',$info)
            ->find();
        $db_a=$db['image'];
        echo $db_a;
        $this->assign('image',$db_a);
        return $this->fetch();
    }

}