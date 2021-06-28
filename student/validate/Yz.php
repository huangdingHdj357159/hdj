<?php
/**
 * Created by PhpStorm.
 * User: hbl
 * Date: 2020/12/30
 * Time: 19:36
 */

namespace app\student\validate;


use think\Validate;

class Yz extends Validate
{
       protected $rule=[
           'name_a'=>'require|max:16|min:3',
           'name'=>'require|max:16|min:2',
           'psw'=>'require|max:40|min:3',
           'xinb'=>'require|max:3',
           'nianl'=>'require|between:1,129|number',
           'id'=>'number|require',
           'dianh'=>'number|max:18|min:3|mobile',
           'diz'=>'max:100|min:3',
           'banj'=>'require'
       ];
       protected $message=[
           'name.require'=>'姓名不能为空',
           'name.max'=>'姓名长度超出16位',
           'name.min'=>'姓名最短3位',
           'name_a.require'=>'用户名不能为空',
           'name_a.max'=>'用户名长度超出16位',
           'name_a.min'=>'用户名最短3位',
           'psw.require'=>'密码不能为空',
           'psw.max'=>'密码长度超过40位',
           'psw.min'=>'密码最短为3位',
           'xinb.require'=>'实名认证不能为空',
           'xinb.max'=>'实名认证只有是或否',
           'id.number'=>'工号只能为数字',
           'id.require'=>'工号不能为空',
           'dianh.number'=>'电话只能为数字',
           'dianh.min'=>'电话最短为3 位',
           'dainh.max'=>'电话号码超过位数',
           'dainh.mobile'=>'这个不是电话号码哦',
//           'diz.chsAlpha'=>'住址只能是汉字或字母',
           'diz.max'=>'住址超过100位',
           'diz.min'=>'住址最短位3位',
           'banj.require'=>'岗位不能为空',
           'nianl.between'=>'年龄只能在1到129岁',
       ];
       protected $scene=[
           'login'=>['name_a','psw'],
           'sc'=>['name','id'],
           'tj'=>['name','xinb','nianl'],
           'xg'=>['id','name','xinb','nianl','dianh','diz','banj']
       ];
}