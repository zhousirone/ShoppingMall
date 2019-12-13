<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Model\Attr_goods;
use App\Model\Attr_class;
use App\Model\Sku;

class GoodsManage extends Controller
{
    public function attribute_class()
    {
        $data=Attr_class::all()->toArray();
//        var_dump($data);die;
        return view('admin.goodsmanage.attribute_class',['data'=>$data]);
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

        return view('admin.goodsmanage.goods_show',['data'=>$arr]);
    }
    public function goods_sku()
    {
        $data=Sku::all()->toArray();
//        var_dump($data);die;
        return view('admin.goodsmanage.goods_sku',['data'=>$data]);
    }
}
