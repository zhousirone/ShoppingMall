<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\User;
use App\Model\Attr_goods;
use App\Model\Attr_class;
use App\Model\Attr_attribute;

// use think\facade\Request;
// use think\Request;
class GoodsController extends Controller
{
    //
    public function index()
    {
        return view('common/index');
    }
    public function goods_list()
    {

//       $info=Attr_goods::all()->toArray();
        $info = Attr_goods::with('Attr_attribute')->get()->toArray();
//       var_dump($info);die;
        $data=Attr_goods::all()->toArray();

        return view('common/goods_list',['data'=>$data]);
    }
    public function attr_add()
    {
        $data=Attr_goods::all()->toArray();
        return view('common/attr_add',['data'=>$data]);
    }
    public function add_list(Request $request)
    {
        $data = $request->post();  //获取所有
//        $params=$request->get('name');
//        $par=$request->get('attr_num');
//        var_dump($data);die;
        $flight=new Attr_goods();
//        $result = $this->create($request->all());
//        $rs=Attr_goods::create(['name'=>$params,'attr_num'=>$par]);
        $rs=$flight->add($data);
        if($rs){
            echo "<script>alert('成功');</script> ";
        }
//        var_dump($rs);die;
//
    }
    //分类
    public function classification()
    {
//        $info = Attr_goods::with('Attr_class')->get()->toArray();
//        $pid=$info[0]['id'];
//        var_dump($pid);die;


    }
    public function status_upd(Request $request)
    {
        $id=$request->post('id');
//        var_dump($id);die;
        $user=Attr_goods::find($id)->toArray();
//        var_dump($user);die;
        if($user['status']=='已启用'){
            $user['status']='已停用';
        }else{
            $user['status']='已启用';
        }
//        $user->status=$status;
//        $list=$user->save($user);
//        var_dump($list);die;
    }
    public function del(Request $request)
    {
        $id=$request->get('id');

        $list=Attr_goods::destroy($id);
//        var_dump($list);die;
        if($list){
            echo 0;
        }
    }
    public function update_id(Request $request)
    {
        $id=$request->post('id');
//        var_dump($id);die;
        $res=Attr_goods::where('pid',$id)->get();
//        var_dump($res);die;
        if($res){
            return view('attribute/attr_value',['data'=>$res]);
        }

    }
    public function value_id()
    {
        $id=$request->get('id');

        $list=Attr_goods::destroy($id);
//        var_dump($list);die;
        if($list){
            echo 0;
        }
    }
}
