<?php

namespace App\Http\Controllers\admin;

use App\Model\Power;
use App\Model\Power_menu;
use App\Model\Role;
use App\Model\Role_power;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Roles extends Controller
{

    public function listRole()
    {
        $data=Role::with('powers')->get()->toArray();
//        var_dump($data);die;
        $count=count($data);
//        var_dump($count);die;
        for($i=0;$i<$count;$i++){
            if($data[$i]['powers']==array()){
                $data[$i]['powers'][0]['powername']="暂无菜单权限";
            }
        }
        return view('admin.role.listRole',['data'=>$data]);
    }

    public function addRole()
    {
        $data=Power::with('menus')->get()->toArray();
        return view('admin.role.addRole',['data'=>$data]);
    }


    public function doAddRole(Request $request)
    {
        $power_id=$request->post('power_id');
        $rolename=$request->post('name');
        $power_id=explode(',',"$power_id");
        $model = new Role();
        $model->rolename = $rolename;
        $sql = $model->save();
        $role_id = $model->id;
        foreach ($power_id as $key => $value) {
            $models = new Role_power();
            $models->role_id = $role_id;
            $models->power_id = $value;
            $res=$models->save();
        }
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
    public function updPower(Request $request)
    {
        $id=$request->id;

        return view('admin.role.updPower',['data'=>$id]);
    }

    public function delRole(Request $request)
    {
        $id=$request->post('id');
        $res=Role::find($id)->delete();
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


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }





    public function destroy($id)
    {
        //
    }
}
