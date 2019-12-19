<?php

namespace App\Http\Controllers\Api;

use App\Model\Goods;
use App\Model\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class login extends Controller
{
    public function login(Request $request)
    {
        $name = $request->get('name');
        $pwd = $request->get('pwd');
        $user = new Users();
        $data = $user->where('name',$name)->find(1);
        if ($data)
        {
            if ($pwd == $data['pwd']){
                $arr = array(
                  'code'=>200,
                  'mag' => '登录成功'
                );
                session(['name'=>$name]);
                return $arr;
            }else{
                $arr = array(
                    'code'=>500,
                    'mag' => '密码错误，请重新登录'
                );
                return $arr;
            }
        }else{
            $arr = array(
                'code'=>404,
                'mag' => '账号不存在，请重新填写'
            );
            return $arr;
        }


    }

}
