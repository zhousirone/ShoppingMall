<?php

namespace App\Http\Controllers\index;

use App\Model\Good;
use App\Model\Shopcar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Shopcars extends Controller
{
    public function addShopCar(Request $request)
    {

        $id = $request->post('id');
        if($id==''){
            return redirect('shopCar');
        }else{
            $data = Good::find($id)->toArray();
            unset($data['id']);
            $data['num']=1;
            $res = Shopcar::insert($data);
            return redirect('shopCar');
        }

    }

    public function shopCar()
    {
        $data = Shopcar::get()->toArray();
        $count = count($data);

        return view('index.common.shopCar',['data'=>$data,'count'=>$count]);
    }

    public function delCart(){
        $id = $_GET['id'];
        $sql = Shopcar::where('id',$id)->delete();
        if($sql){
            echo "<script>alert('删除成功');location.href='shopCar';</script>";
        }

    }
    public function aaa(Request $request){
        $shuliang = $request->post('shuliang');
        $shangpinid = $request->post('shangpinid');
        $xiaoji = $request->post('xiaoji');
        $zongjia = $request->post('zongjia');
        $shuliang = explode(',',$shuliang);
        $shangpinid = explode(',',$shangpinid);
        $xiaoji = explode(',',$xiaoji);
//        var_dump($xiaoji);die;
        $sum = count($shangpinid);
        for($i=0;$i<$sum;$i++){
            $data['num']=$shuliang[$i];
            $data['price_hua']=$xiaoji[$i];
           $res= DB::table('shopcar')->where('id',$shangpinid[$i])->update($data);
        }
        $arr['code'] = 1;
        $arr['msg'] = $zongjia;
        echo json_encode($arr);
//        return redirect('check');


    }
    public function check()
    {
        $res = Shopcar::get()->toArray();
        $count = count($res);
//        var_dump($res);die;
        $zongjia =(int) '';
        for($i=0;$i<$count;$i++){
             $zongjia += $res[$i]['price_hua'];
        }
        
        return view('index.common.check');
    }
    public function zhifu()
    {
        return view('index.common.zhifu');
    }
}
