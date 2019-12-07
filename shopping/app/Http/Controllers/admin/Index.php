<?php

namespace App\Http\Controllers\admin;


use App\Model\Admin;
use App\Model\Menu;
use App\Model\Power;
use App\Model\Role;
use Illuminate\Foundation\Bus\DispatchesJobs;

use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Index extends BaseController
{
    public function index( Request $request)
    {
        $data = Session::get('admin');
        $id=$data['id'];
        $menu = new Menu();
        $res=$menu->test($id);
        return view('admin.menu',['data'=> $data,'res'=>$res]);
    }
    public function show()
    {
        $data = Session::get('admin');
        return view('admin.welcome',['data'=> $data]);
    }


    public function login()
    {
        return view('admin.login');
    }
    public function doLogin( Request $request)
    {
        $username = $request->post('username');
        $password = $request->post('password');
        $res = Admin::where('username',$username)->get();

        foreach ($res as $k => $v){
            $res = $v;
        }
        if ($res) {
            if ($password == $res['password']) {
                date_default_timezone_set('Etc/GMT-8');
                $res['logintime']=date('Y-m-d H:i:s');
                Session::put('admin',$res);
                $res['code'] = 0;
                $res['msg'] = "登陆成功";
                echo json_encode($res);
            } else {
                $res['code'] = 2;
                $res['msg'] = "密码错误";
                echo json_encode($res);
            }
        } else {
            $res['code'] = 1;
            $res['msg'] = "用户名错误";
            echo json_encode($res);
        }
    }





}
