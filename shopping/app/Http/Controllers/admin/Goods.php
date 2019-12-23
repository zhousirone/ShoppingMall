<?php

namespace App\Http\Controllers\admin;

use App\Model\Attr_class;
use App\model\Brand;
use App\Model\Good;
use Illuminate\Http\Request;
use App\Model\Warehouse;
use App\Http\Controllers\Controller;

class Goods extends Controller
{

    public function listGoods()
    {
        $data=Good::with('class','brand','warehouse')->get()->toArray();
//        dd($data);die;
        return view('admin.goods.listGoods',['data'=>$data]);
    }

    public function goodsAdd()
    {
        $class=Attr_class::get();
        $brand=Brand::get();
        $warehouse=Warehouse::get();
        return view('admin.goods.goodsAdd',['class'=>$class,'brand'=>$brand,'warehouse'=>$warehouse]);
    }
    public function doGoodsAdd(Request $request)
    {
        $data = $request->post();
        $file = $request->file("image")->store('public');
        $data['image'] = "/storage".substr($file,6);
//        var_dump($img);
        $goods_id=Good::insert($data);
        if($goods_id){
            echo "<script>alert('添加成功');location.href='listGoods'</script>";
        }
    }

    public function delGoods(Request $request)
    {
        $id = $request->get('id');
        $res=Good::find($id)->delete();
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
