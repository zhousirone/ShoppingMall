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
           return redirect('warehouseShow');
       }else{
           return 2;
       }
    }
    //仓库展示
    public function warehouseShow()
    {
        $data = Warehouses::all()->toArray();
        $arr = array();
        foreach ($data as $k => $v){
            $arr[$k]['id'] = $v['id'];
            $arr[$k]['name'] = $v['name'];
            $arr[$k]['code'] = $v['code'];
            $arr[$k]['state'] = $v['state'];
            $arr[$k]['location'] = json_decode($v['location'],1);
            $arr[$k]['service'] = json_decode($v['service'],1);
        }
        return view('admin/warehouse/warehouseShow', ['data' => $arr]);
    }
    //删除
    public function warehouseDel(Request $request)
    {
        $id = $request->get('id');
        $warehouse = new Warehouses();
        if ($warehouse->where('id','=',$id)->delete())
        {
            return 1;
        }else{
            return 2;
        }
    }
    //修改
    public function warehouseUpd(Request $request)
    {
        $id = $request->get('id');
        $data = Warehouses::where('id','=',$id)->get()->toArray();
        $data[0]['location'] = json_decode($data[0]['location'],1);
        $data[0]['service'] = json_decode($data[0]['service'],1);
//        dump($data);die;
        return view('admin/warehouse/warehouseUpd', ['data'=>$data]);
    }
    public function updata(Request $request)
    {
        $data = $request->post();
//        dump($data);
//        echo $data['data']['id'];
        $id = $data['data']['id'];
        unset($data['data']['id']);
        $arr = array(
            'name'=>$data['data']['name'],
            'code'=>$data['data']['code'],
            'state'=>$data['data']['state'],
            'location'=>json_encode(array(
                'provinces'=>$data['data']['provinces'],
                'citys'=>$data['data']['citys'],
                'areas'=>$data['data']['areas'])),
            'service'=>json_encode(array(
                'province'=>$data['data']['province'],
                'city'=>$data['data']['city'],
                'area'=>$data['data']['area']))
        );
        $warehouse = new Warehouses();
        $res = $warehouse->upd($arr,$id);
        if ($res){
            echo 1;
        }else{
            echo 2;
        }


    }
}
