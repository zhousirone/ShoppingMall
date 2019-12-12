<?php

namespace App\Http\Controllers\index;

use App\model\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class proscenium extends BaseController
{
    //
    public function index()
    {
        return view('index.login.login');
    }
    public function login_add(Request $request)
    {
        $name = $request->post('name');
        $pwd = $request->post('pwd');
        $res = User::where('name',$name)->get()->toArray();
        foreach ($res as $k => $v){
            $res = $v;
        }

//        var_dump($res);die;
        if($res){
            if($res['pwd']==$pwd){
                Session::put('user',$res);

                $res['code'] = 0;
                $res['msg'] = "登陆成功";
                echo json_encode($res);

            }else{
                $res['code'] = 1;
                $res['msg'] = "密码错误";
                echo json_encode($res);

            }
        }else{
            $res['code'] = 2;
            $res['msg'] = "证号不存在";
            echo json_encode($res);

        }
    }
    public function register()
    {
        return view('index.login.register');
    }
}
