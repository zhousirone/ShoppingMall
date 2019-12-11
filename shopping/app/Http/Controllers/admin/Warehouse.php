<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Warehouse as Warehouses;

class Warehouse extends Controller
{
    //仓库添加页面
    public function showAdd()
    {
        return view('admin/warehouse/showAdd');
    }
    //仓库添加
    public function warehouseAdd(Request $request)
    {
        $data = $request->post();
//        echo '<pre>';
//        print_r($data);die;
        $arr = array(
            'name'=>$data['name'],
            'code'=>$data['code'],
            'state'=>$data['state'],
            'location'=>json_encode(array(
                'provinces'=>$data['provinces'],
                'citys'=>$data['citys'],
                'areas'=>$data['areas'])),
            'service'=>json_encode(array(
                'province'=>$data['province'],
                'city'=>$data['city'],
                'area'=>$data['area']))
        );
       $warehouse = new Warehouses();
       $res = $warehouse->add($arr);
       if ($res){
           return 1;
       }else{
           return 2;
       }
    }
    //仓库展示
    public function warehouseShow()
    {
        $data = Warehouses::all()->toArray();
        $data[0]['location'] = json_decode($data[0]['location'],1);
        $data[0]['service']=json_decode($data[0]['service'],1);
        return view('admin/warehouse/warehouseShow', ['data' => $data]);
    }
}
