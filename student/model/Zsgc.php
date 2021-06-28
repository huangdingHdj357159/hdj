<?php
/**
 * Created by PhpStorm.
 * User: hbl
 * Date: 2020/12/30
 * Time: 20:57
 */

namespace app\student\model;


use think\Db;

class Zsgc
{
    public function tj($data){
        $rel=Db::table('stu')
            ->where($data)
            ->find();
        if (!($rel==true)){
            $red=Db::table('stu')
                ->insert($data);
            if (!($red==false)){
                echo "添加成功";
            }else{
                echo "添加失败";
            }
        }else{
            echo "已经有这个员工信息了";
        }
    }
    public function sc($data){
        $rel=Db::table('stu')
            ->where($data)
            ->delete();
        if (!($rel==false)){
            echo "删除成功";
        }else{
            echo "删除失败";
        }
    }
    public function xg($data){
//        echo $data['nianl'],$data['xinb'];
        $rel=Db::table('stu')
            ->where('id',$data['id'])
        ->update($data);
        if (!($rel==false)){
            echo "修改成功";
        }else{
            echo "修改失败";
        }
    }
    public function cz($data){
        $rel=Db::table('stu')
            ->where('name',$data)
            ->select();
        if (!($rel==false)){
            return $rel;
        }else{
            echo $data;
        }
    }
}