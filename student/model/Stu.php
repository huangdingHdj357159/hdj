<?php
/**
 * Created by PhpStorm.
 * User: hbl
 * Date: 2020/12/30
 * Time: 20:48
 */

namespace app\student\model;


use think\Db;

class Stu
{
      public function souy(){
          $rel=Db::table('stu')
              ->select();
          return $rel;
      }
}