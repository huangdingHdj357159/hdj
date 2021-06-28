<?php
/**
 * Created by PhpStorm.
 * User: hbl
 * Date: 2020/12/30
 * Time: 20:57
 */

namespace app\student\controller;


use app\student\common\Base;
use app\student\validate\Yz;
use think\Db;

class Zsgc extends Base
{
    public function tj(){
        return$this->fetch();
    }
    public function xg(){
        return$this->fetch();
    }
    public function sc(){
        return$this->fetch();
    }
     public function tj_a(){
        $data=$this->request->param();
        $obj=new Yz();
        if (!$obj->scene('tj')->check($data)){
            echo $obj->getError();
        }else{
            $rel=new \app\student\model\Zsgc();
            $rel->tj($data);
        }
     }
     public function sc_a(){
         $data=$this->request->param();
         $obj=new Yz();
         if (!$obj->scene('sc')->check($data)){
             echo $obj->getError();
         }else {
             $rel = new \app\student\model\Zsgc();
             $rel->sc($data);
         }
     }
     public function xg_a(){
        $data=$this->request->param();
        $obj=new Yz();
        if (!$obj->scene('xg')->check($data)){
            echo $obj->getError();
        }else{
            $rel=new \app\student\model\Zsgc();
            $rel->xg($data);
        }
     }
     public function cz(){
        $data=$this->request->param('name');
        $rel=new \app\student\model\Zsgc();
        $bl=$rel->cz($data);
        $this->assign('lis',$bl);
        echo $data;//测试输出
//        dump($bl);
        return $this->fetch();
     }
}