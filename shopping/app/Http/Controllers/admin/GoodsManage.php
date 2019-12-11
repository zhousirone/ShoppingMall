<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Model\Attr_goods;
use App\Model\Attr_class;
use App\Model\Sku;
use App\Model\Attr_attribute;
use App\Model\Attr_total;
use App\Model\Attribute_key;
use App\Model\Attribute_value;

use PHPUnit\Framework\Constraint\Attribute;

class GoodsManage extends Controller
{
    public function attribute_class()
    {
        $data=Attr_class::all()->toArray();
//        var_dump($data);die;
        return view('admin.goodsmanage/attribute_class',['data'=>$data]);
    }
    public function list_class(Request $request)
    {
        $name=$request->post('name');
        $cid=$request->post('cid');
//        var_dump($cid);die;
        $user=new Attr_goods();
        $user->name=$request->name;
        $user->cid=$request->cid;
        $res=$user->save();
        if($res){
            return redirect('goods_show');
        }
//        $info = Attr_goods::with('Attr_class')->where(['cid'=>$cid])->get()->toArray();
//        var_dump($info);die;

    }
    public function goods_show()
    {
        $arr = Attr_class::with('Attr_goods')->get()->toArray();

        return view('admin.goodsmanage/goods_show',['data'=>$arr]);
    }
    public function goods_sku()
    {
        $data=Sku::all()->toArray();
//        var_dump($data);die;
        return view('admin.goodsmanage/goods_sku',['data'=>$data]);
    }
    public function sku_add(Request $request)
    {
        $sku=$request->post();

//        var_dump($color);die;
        $sku=json_encode($sku);
        $user=new Attr_goods();

        $user->sku=$sku;

        $res=$user->save();
        var_dump($res);die;
        $size=$request->post('size');
        $price=$request->post('price');

    }
    public function brand()
    {
        $data=Attr_class::all()->toArray();
        var_dump($data);die;
        return view('admin.goodsmanage/attribute_class',['data'=>$data]);
    }
    public function class_list()
    {
//        $arr = Attr_class::with('sku_goods')->get()->toArray();
        $data=Attribute_key::all()->toArray();
       $color= $data[0]['attribute_name'];
        $size= $data[1]['attribute_name'];
//
//        $list=Attribute_value::all()->toArray();
        $list = Attribute_key::with('sku_goods')->get()->toArray();
        var_dump($list);die;
        return view('admin.goodsmanage/goods_addsku',['data'=>$data,'color'=>$color,'size'=>$size]);
//        $arr = Attr_goods::with('total')->get()->toArray();
//        var_dump($arr);die;
    }
    public function goods_li()
    {
        $data=Attr_goods::all()->toArray();
//        var_dump($list);die;
        return view('admin.goodsmanage/goods_li',['data'=>$data]);
    }
}
