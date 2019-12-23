<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Model\Brand;

use Illuminate\Routing\Controller;

class BrandController extends Controller
{
    //
    public function brand_add()
    {
        $data=Brand::all()->toArray();
//        var_dump($data);die;
        return view('admin.brand.brand_add',['data'=>$data]);
    }
    public function add(Request $request)
    {
        $name=$request->post('name');
        $status=$request->post('status');
//        var_dump($name);die;

        $brand=new Brand();
        $brand->name=$name;
        $brand->status=$status;
        $res=$brand->save();
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
    public function list()
    {
        $data=Brand::orderBy('name','asc')->get()->toArray();

        return view('admin.brand.list',['data'=>$data]);
    }
    public function del(Request $request)
    {
        $id=$request->get('id');

        $list = Brand::destroy($id);
//        var_dump($list);die;
        if($list){
            echo 0;
        }
    }
    public function order_list(Request $request)
    {
//        $res=Brand::all()->toArray();
//        if($res){
//            $data = Brand::orderBy('name','desc')->get()->toArray();
//            return $data;
//        }else($res == ""){
//            $rs = Brand::orderBy('name','asc')->get()->toArray();
//            return $rs;
//        }
//        return view('admin.brand.list',['data'=>$data]);
    }

    public function brand_upd(Request $request)
    {
        $id=$request->post('id');
//        var_dump($id);die;
        $data=Brand::where("id",$id)->first();
//        var_dump($data);die;
        return view('admin.brand.brand_replace',['data'=>$data]);
    }
    public function brand_update(Request $request){
        $name=$request->post('name');
//        var_dump($name);die;
        $id=$request->post('id');
//        var_dump($id);die;//打印完是字符串
        $res=Brand::where('id',$id)->update(['name'=>$name]);
        if($res){
//         echo "<script>alert('修改成功');</script>";
            return redirect('list');
        }
    }
}
