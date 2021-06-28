<?php
/**
 * Created by PhpStorm.
 * User: hbl
 * Date: 2020/12/30
 * Time: 20:42
 */

namespace app\student\common;


use think\App;
use think\Controller;
use think\facade\Session;

class Base extends Controller
{
     public function __construct(App $app = null)
     {
         parent::__construct($app);
         if (Session::has('in')){
         }else{
             $this->redirect('Login/zc');
//             $this->success('','login/zc');
         }
     }
}