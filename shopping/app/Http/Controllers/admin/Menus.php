<?php

namespace App\Http\Controllers\admin;

use App\Model\Menu;
use App\Model\Power;
use App\Model\Power_menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Menus extends Controller
{

    public function index()
    {
        $power = Power::all();
        return view('admin.menu.addMenu',['power'=> $power]);
    }


    public function create(Request $request)
    {
        $menuname=$request->post('menuname');
        $ass=Menu::where('menuname',$menuname)->get();
        if($ass){
            $arr['code'] = 2;
            $arr['msg'] = "菜单已存在";
            return json_encode($arr);
        }else{
            $power_id=$request->post('power_id');
            $url=$request->post('url');
            $menu = new Menu();
            $menu->menuname = $menuname;
            $menu->pid = $power_id;
            $menu->url=$url;
            $menu->save();
            $menu_id = $menu->id;
            $power_menu=new Power_menu();
            $power_menu->power_id=$power_id;
            $power_menu->menu_id=$menu_id;
            $res=$power_menu->save();
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


    }

    public function addPower()
    {
        return view('admin.menu.addPower');
    }
    public function doAddPower(Request $request)
    {
        $powername = $request->post('powername');
        $power = new Power();
        $power->powername = $powername;
        $res=$power->save();
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
    public function listMenu()
    {
        $data=Menu::with('p_m')->orderBy('pid', 'asc')->get()->toArray();
//        var_dump($data);die;
        return view('admin.menu.listMenu',['data'=>$data]);
    }



    public function delMenu(Request $request)
    {
        $id=$request->post('id');
        Menu::find($id)->delete();
        $res=Power_menu::where('menu_id', '=', $id)->delete();
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

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
