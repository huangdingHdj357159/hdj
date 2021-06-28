<?php
/**
 * Created by PhpStorm.
 * User: hbl
 * Date: 2020/12/30
 * Time: 19:45
 */

namespace app\student\model;


use think\Db;
use think\facade\Session;

class Login
{
    public function zc($data){
        $red=Db::table('login')
            ->where($data)
            ->find();
        if (!($red==true)) {
            $rel = Db::table('login')
                ->insert($data);
            if (!($rel == false)) {
                echo 1;
            } else {
                echo "注册失败";
            }
        }else{
            echo "用户名已经被使用";
        }
    }
    public function dl($data){
          $rel=Db::table('login')
              ->where($data)
              ->field('id')
              ->find();
          $u_id=$rel['id'];
          if (!($rel==false)){
              echo 1;
//              Session::set('in,if','12,58');
              Session::set('in',$u_id);
          }else{
              echo "用户名或密码错误";
          }
    }
}