<?php

namespace App\Http\Controllers\index;

use App\model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class Login extends Controller
{

    public function login()
    {
        return view('index.login.login');
    }
    public function loginDo(Request $request)
    {
        $name = $request->post('name');
        $pwd = $request->post('pwd');
        $res = User::where('name',$name)->get()->toArray();
        foreach ($res as $k => $v){
            $res = $v;
        }
        if($res){
            if($res['pwd']==$pwd){
                date_default_timezone_set('PRC');
                $res['time'] = date('Y-m-d H:i:s',time());
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

    public function regist()
    {
        return view('index.login.register');
    }


    public function registDo(Request $request)
    {
        $data = $request->post();
        unset($data['_token']);
        unset($data['repassword']);
        $file = $request->file("headimg")->store('public');
        $data['headimg'] = "/storage".substr($file,6);
//        var_dump($img);
        $goods_id=User::insert($data);
        if($goods_id){
            echo "<script>alert('注册成功');location.href='indexlogin'</script>";
        }
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
