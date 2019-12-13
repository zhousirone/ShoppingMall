<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Order as Orders;

class Order extends Controller
{
    public function index()
    {
        $arr = Orders::all();
        return view('admin/order/index', ['arr' => $arr]);
    }
    public function administer()
    {
        $order = Orders::all(['id','order_number','name','order_state']);
//        dd($order);
        return view('admin/order/administer', ['order'=>$order]);
    }
    public function update(Request $request)
    {
        $id = $request->get('id');
        $arr = Orders::where('id',$id)->get(['id','order_number','name','order_state'])->toArray();
        $state = array('1'=>'未出库','2'=>'已出库','3'=>'在途中','4'=>'待签收','5'=>'已签收');
//        dd($arr);die;
        return view('admin/order/update', ['arr'=>$arr, 'state'=>$state]);
    }
    public function update_do(Request $request)
    {
        $data = $request->post();
//        echo $data['data']['order_state'];die;
        $order = new Orders();
//        var_dump($order->where('id',$data['data']['id'])->update(['order_state'=>$data['data']['order_state']]));die;
        if ($order->where('id',$data['data']['id'])->update(['order_state'=>$data['data']['order_state']]))
        {
            echo 1;
        }else{
            echo 2;
        }

    }
}
