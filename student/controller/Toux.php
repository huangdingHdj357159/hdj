<?php
/**
 * Created by PhpStorm.
 * User: hbl
 * Date: 2021/3/2
 * Time: 20:07
 */

namespace app\student\controller;


use think\Controller;
use think\Db;
use think\facade\Session;

class Toux extends  Controller
{
    public function toux(){
        return $this->fetch();
    }
    public function toux_a(){
//        Session::set('name','thinkphp');
        $name=Session::get('in');
//        $name=Session::get('name');
//        echo $name;
        $file=$this->request->file('image');
        $url=$file->validate(['ext'=>'jpg,png'])->move('./static/image');
        $str='http://127.0.0.2/static/image/'.$url->getSaveName();
        $db=Db::table('image')
            ->where('id',$name)
            ->select();
        if ($db){
            $rel=Db::table('image')
//            ->insert(['id'=>$name,'image'=>$str]);
                ->where('id',$name)
                ->update(['image'=>$str]);
            if (($rel)){
                echo "上传成功";

            }else{
                echo "上传失败";
                echo $name.$str;
            }
        }else{
            $rel=Db::table('image')
            ->insert(['id'=>$name,'image'=>$str]);
            if (($rel)){
                echo "上传成功";

            }else{
                echo "上传失败";
                echo $name.$str;
            }
        }

    }
}