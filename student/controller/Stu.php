<?php
/**
 * Created by PhpStorm.
 * User: hbl
 * Date: 2020/12/30
 * Time: 19:29
 */

namespace app\student\controller;


use app\student\common\Base;
use think\Controller;
use think\Db;
use think\facade\Session;

class Stu extends Base
{
        public function zhuy(){
            $obj=Db::table('stu')
                ->select();
            $this->assign('list',$obj);
            $fd=Session::get('name');
            $this->assign('name',$fd);
            $info=Session::get('in');
            $db=Db::table('image')
                ->where('id',$info)
                ->find();
            $db_a=$db['image'];
//            echo $db_a;
            $this->assign('image',$db_a);
            return $this->fetch();
        }
        public function cz_a(){
            $data=$this->request->param('name');
//            echo $data;
            $rel=new \app\student\model\Zsgc();
            $bl=$rel->cz($data);
        }

}