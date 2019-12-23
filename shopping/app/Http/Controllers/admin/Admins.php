<?php

namespace App\Http\Controllers\admin;

use App\Model\Admin_role;
use App\Model\Role;
use App\Model\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;



class Admins extends BaseController
{
    public function aaa()
    {
        return view('admin.admin.aaa');
    }
    public function bbb()
    {
        $arr=array(array('id'=>1,'name'=>'抱枕','img'=>8,'number'=>9,'text'=>"123",'price'=>10));
//        var_dump($arr);die;
        return view('admin.admin.bbb',['data'=>$arr]);
    }

    public function addAdmin()
    {
        $role = Role::get()->toArray();
//        var_dump($role);die;
        return view('admin.admin.addAdmin',['role'=> $role]);
    }

    public function doAddAdmin(Request $request)
    {
        $username = $request-> post('username');
        $password = $request-> post('password');
        $nickname = $request-> post('nickname');
        $createtime=date('Y-m-d H:i:s');
        $res = new Admin();
        $res-> username = $username;
        $res-> password = $password;
        $res-> nickname = $nickname;
        $res-> createtime = $createtime;
        $res = $res-> save();
        if($res){
            $arr['code'] = 0;
            $arr['msg'] = "添加成功";
            echo json_encode($arr);
        }else{
            $arr['code'] = 1;
            $arr['msg'] = "添加失败";
            echo json_encode($arr);
        }
    }
    public function listAdmin()
    {
        $data=Admin::with('roles')->get()->toArray();
        $count=count($data);
        for($i=0;$i<$count;$i++){
            if($data[$i]['roles']==array()){
                $data[$i]['roles'][0]['rolename']="暂无角色";
            }
        }
        return view('admin.admin.listAdmin',['data'=> $data]);
    }

    public function updAdmin(Request $request)
    {
        $id=$request->get('id');
        $data=Admin::find($id)->toArray();
        return view ('admin.admin.updAdmin',['data'=>$data]);
    }
    public function doUpdAdmin(Request $request)
    {
        $id = $request-> post('id');
        $lastpassword = $request-> post('lastpassword');
        $username = $request-> post('username');
        $password = $request-> post('password');
        $nickname = $request-> post('nickname');
        $createtime=date('Y-m-d H:i:s');
        $res =Admin::find($id);
        if($res->password==$lastpassword){
            $res-> username = $username;
            $res-> password = $password;
            $res-> nickname = $nickname;
            $res-> createtime = $createtime;
            $res = $res-> save();
            if($res){
                $arr['code'] = 0;
                $arr['msg'] = "修改成功";
                echo json_encode($arr);
            }else{
                $arr['code'] = 1;
                $arr['msg'] = "修改失败";
                echo json_encode($arr);
            }
        }else{
            $arr['code'] = 2;
            $arr['msg'] = "原密码输入错误";
            echo json_encode($arr);
        }
    }

    public function roleAdmin(Request $request)
    {
        $id=$request->get('id');
        $data=Admin::with('roles')->find($id)->toArray();
//        var_dump($data);die;
        if($data['roles'] == array()){
            $data['roles'][0]['rolename']="请选择角色";
            $data['roles'][0]['id']="";
        }
//        var_dump($data);die;
        $role = Role::all();
        return view('admin.admin.roleAdmin',['data'=>$data,'role'=> $role]);
    }

    public function doRoleAdmin(Request $request)
    {
        $id = $request-> post('id');
        $role_id = $request-> post('role_id');
        $ree =Admin_role::where('admin_id','=',$id)->delete();

        $res=new Admin_role();
        $res-> admin_id = $id;
        $res-> role_id = $role_id;
        $res = $res->save();
        if($res){
            $arr['code'] = 0;
            $arr['msg'] = "角色修改成功";
            echo json_encode($arr);
        }else{
            $arr['code'] = 1;
            $arr['msg'] = "角色修改失败";
            echo json_encode($arr);
        }
    }
    public function delAdmin(Request $request)
    {
        $id=$request->post('id');
        $res=Admin::find($id)->delete();
        if($res){
            $arr['code'] = 0;
            $arr['msg'] = "删除成功";
            echo json_encode($arr);
        }else{
            $arr['code'] = 1;
            $arr['msg'] = "删除失败";
            echo json_encode($arr);
        }
    }

}
