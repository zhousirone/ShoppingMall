<?php

namespace App\Http\Controllers\index;

use App\model\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class proscenium extends BaseController
{
    //
    public function login()
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
    public function register_add(Request $request)
    {
        $name=$request->post('name');
        $email = $request->post('email');
        $pwd = $request->post('pwd');
        $nickname = $request->post('nickname');
        $img = $request->file('headimg');
        $headimg=$request->headimg;
        $gender = $request->post('gender');
        $birthdate = $request->post('birthdate');
//        var_dump($headimg);die;
        $user=new User();
        $user->name=$name;
        $user->email=$email;
        $user->pwd=$pwd;
        $user->nickname=$nickname;
        $user->headimg=$headimg;
        $user->gender=$gender;
        $user->birthdate=$birthdate;
        $list=$user->save();
        if($list){
            $res['code'] = 0;
            $res['msg'] = "注册成功";
            echo json_encode($res);
        }else{
            $res['code'] = 1;
            $res['msg'] = "注册失败";
            echo json_encode($res);
        }

    }
}
