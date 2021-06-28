<?php
/**
 * Created by PhpStorm.
 * User: hbl
 * Date: 2020/12/30
 * Time: 19:34
 */

namespace app\student\controller;


use app\student\validate\Yz;
use think\Controller;
use think\Db;

class Login extends Controller
{
    public function dl()
    {
        return $this->fetch();
    }

    public function zc()
    {
        return $this->fetch();
//          return $this->fetch();
    }

    public function dl_a()
    {
        $data = $this->request->param();
        $data_a = [
            'name_a' => $data['name'],
            'psw' => $data['psw']
        ];
        $obj = new  Yz();
        if (!$obj->scene('login')->check($data_a)) {
            echo $obj->getError();
        } else {
            $rel = new \app\student\model\Login();
            $rel->dl($data);

        }
    }

    public function dl_b()
    {
//          $name_a=$this->request->param();
        $name_a = input('post.name');
        $psw_a = input('post.psw');
        $rel = Db::table('login')
            ->where('name', $name_a)
            ->where('psw', $psw_a)
            ->select();
        if ($rel == false) {
//              $name=[
//                  'status'=>$name_a ,
//                  'hu'=>[
//                      'status'=>'ok'
//                  ],
//
//              ];
        } else {
            $name = [
                'status' => 'ok',
                'hu' => [
                    'status' => 'ok'
                ],

            ];
        }
//          $name=[
//              'status'=>'ok',
//              'hu'=>[
//                  'status'=>'ok'
//              ],
//
//          ];
//          $psw='hihih';
////         echo $name,'ok';
        echo urldecode(json_encode($name));
    }

    public function zc_a()
    {
        $data = $this->request->param();
        $data_a = [
            'name_a' => $data['name'],
            'psw' => $data['psw']
        ];
        $obj = new Yz();
        if (!($obj->scene('login')->check($data_a))) {
            echo $obj->getError();
        } else {
            $rel = new  \app\student\model\Login();
            $rel->zc($data);
        }
    }
}