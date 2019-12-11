<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Model\Attr_goods;
use Illuminate\Support\Facades\DB;
class AttributeValue extends Controller
{
    //
    public function attr_value()
    {
        $data=Attr_goods::all();
        return view('admin.attribute/attr_value',['data'=>$data]);
    }
    public function attr_upd(Request $request)
    {
        $id=$request->post('id');

//        $res=$user->save($list);

        $data=Attr_goods::where("id",$id)->first();
//        var_dump($data);die;
        return view('admin.attribute/attr_replace',['data'=>$data]);
    }
    public function upd(Request $request){
        $name=$request->post('name');
//        $list=implode('data',$data);
        $id=$request->post('id');
//        var_dump($id);die;//打印完是字符串
//       $user=new Attr_goods();
//////       $user->name=$data;
//////       $res=$user->save();
     $res=Attr_goods::where('id',$id)->update(['name'=>$name]);
     if($res){
//         echo "<script>alert('修改成功');</script>";
         return redirect('goods_add');
     }
    }
    public function value_add(Request $request){
//        $data=$request->post();
//        var_dump($data);die;
////        $res=Attr_goods::create(['name'=>$name]);
////       var_dump($res);die;
        return view('admin.attribute/value_add');
    }
    public function value_list(Request $request)
    {
        $data=$request->post();
//        var_dump($data);die;
        $user=new Attr_goods();
        $user->name=$request->name;
        $res=$user->save();
//        var_dump($res);die;
        if($res){
            return view('admin.attr_value');
        }
    }
    public function value_upd(Request $request)
    {
        $id=$request->post('id');

//        $res=$user->save($list);

        $data=Attr_goods::where("id",$id)->first();
//        var_dump($data);die;
        return view('admin.attribute/attr_replace',['data'=>$data]);
    }
}
