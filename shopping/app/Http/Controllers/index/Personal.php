<?php

namespace App\Http\Controllers\index;

use App\Model\Good;
use App\Model\Location;
use App\Model\Order;
use App\model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Personal extends Controller
{
    //
    public function data()
    {
        $res = session('user');
        $res['ip'] = $_SERVER["REMOTE_ADDR"];
        return $res;
    }
    public function personalCenter()
    {
        $data = User::where('id','=',$this->data()['id'])->get()->toArray();

        return view('index.personalcenter.personalCenter',
          [
            'id'=>$data[0]['id'],
            'name'=>$data[0]['name'],
            'phone'=>$data[0]['phone'],
            'headimg' => $data[0]['headimg'],
            'ip'=>$this->data()['ip'],
            'time'=>$this->data()['time']
           ]);
    }
    public function update(Request $request)
    {
        $data = $request->post();

        $users = new User();
        $arr = $users->find($data['id']);
        $arr->name = $data['username'];
        if ($data['password'] == ''){
            unset($data['password']);
        }else{
            $arr->pwd  = $data['password'];
        }
        $arr->phone  =$data['phone'];
        $file = $request->file('headimgurl');
        if (!empty($file)){
            $name = $file->getClientOriginalName();
            if ($file->move(public_path().'/files/', $name)){
//            $data['headimg'] = ;
                $arr->headimg = $name;
            }
        }

        $arr->sex = $data['sex'];
        if ($arr->save()){
            return redirect('personalCenter');
        }

    }
    public function order(Request $request)
    {
        $id = $request->get('id');
        $order = new Order();
        $data = $order->where('user_id',$id)->get();
        foreach ($data as $k => $v){
            foreach($order->find($v['id'])->goods()->orderBy('name')->get() as $key =>$value){
               $v['name'] = $value->name;
               $v['image'] = $value->image;
            }
        }
        return view('index.personalcenter.order',[
            'id'=>$this->data()['id'],
            'name'=>$this->data()['name'],
            'phone'=>$this->data()['phone'],
            'headimg' => $this->data()['headimg'],
            'ip'=>$this->data()['ip'],
            'time'=>$this->data()['time'],
            'data'=>$data
        ]);
    }
    public function myLocation(Request $request)
    {
        $id = $request->get('id');
        $data = Location::where('user_id','=',$id)->get();
        return view('index.personalcenter.location',[
            'id'=>$this->data()['id'],
            'name'=>$this->data()['name'],
            'phone'=>$this->data()['phone'],
            'headimg' => $this->data()['headimg'],
            'ip'=>$this->data()['ip'],
            'time'=>$this->data()['time'],
            'data'=>$data
        ]);
    }
    public function locationDel(Request $request)
    {
        $id = $request->get('id');
        $location = Location::find($id);
        $user = $this->data()['id'];
        if ($location->delete()){
            echo "<script>alert('删除成功');location.href='http://www.shopping.com/myLocation?id=$user';</script>";
        }
    }
    public function locationAdd()
    {
        return view('index.personalcenter.locationAdd',[
            'id'=>$this->data()['id'],
            'name'=>$this->data()['name'],
            'phone'=>$this->data()['phone'],
            'headimg' => $this->data()['headimg'],
            'ip'=>$this->data()['ip'],
            'time'=>$this->data()['time'],
        ]);
    }
    public function locationAdd_do(Request $request)
    {
        $data = $request->post();
        $user = $this->data()['id'];
        $location = new Location();
        $location->user_id = $data['id'];
        $location->name    = $data['name'];
        $location->phone   = $data['phone'];
        $location->location= $data['location'];
        $location->detailed= $data['detailed'];
        if ($location->save()){
            return "<script>alert('添加成功');location.href='http://www.shopping.com/myLocation?id=$user';</script>";
        }
    }
    public function locationUpd(Request $request)
    {
        $id = $request->get('id');
        $data = Location::find($id);
        return view('index.personalcenter.locationUpd',[
            'id'=>$this->data()['id'],
            'name'=>$this->data()['name'],
            'phone'=>$this->data()['phone'],
            'headimg' => $this->data()['headimg'],
            'ip'=>$this->data()['ip'],
            'time'=>$this->data()['time'],
            'data'=>$data
        ]);
    }
    public function locationUpdate(Request $request)
    {
        $data = $request->post();
        $user = $this->data()['id'];
        $location = Location::find($data['id']);
        $location->name = $data['name'];
        $location->phone= $data['phone'];
        $location->location = $data['location'];
        $location->detailed = $data['detailed'];
        if ($location->save()){
            return "<script>alert('修改成功');location.href='http://www.shopping.com/myLocation?id=$user';</script>";
        }
    }
}
