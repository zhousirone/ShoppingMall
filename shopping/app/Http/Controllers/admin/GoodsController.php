<?php

namespace App\Http\Controllers\admin;

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
        return view('admin.common.index');
    }
    public function goods_list()
    {

//       $info=Attr_goods::all()->toArray();
        $info = Attr_goods::with('Attr_attribute')->get()->toArray();
//       var_dump($info);die;
        $data=Attr_attribute::all()->toArray();
//        var_dump($data);die;
        return view('admin.common.goods_list',['data'=>$data]);
    }
    public function attr_add()
    {

        $data=Attr_attribute::all()->toArray();
//        var_dump($data);die;
        return view('admin.common/attr_add',['data'=>$data]);

        $data=Attr_goods::all()->toArray();
        return view('admin.common.attr_add',['data'=>$data]);

    }
    public function add_list(Request $request)
    {
        $data = $request->post();  //获取所有

        $flight=new Attr_attribute();
        $flight->attr_name=$data['attr_name'];
        $rs=$flight->save();

        if($rs){

//           return $this->redirect('Attribute/attr_value');
//            return redirect()->action('admin.Attribute/attr_value');
            return redirect('goods_list');


            echo "<script>alert('成功');</script> ";

        }

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
            return view('admin.attribute.attr_value',['data'=>$res]);
        }

    }
    public function value_id(Request $request)
    {
        $id=$request->get('id');

        $list=Attr_goods::destroy($id);
//        var_dump($list);die;
        if($list){
            echo 0;
        }
    }
}
