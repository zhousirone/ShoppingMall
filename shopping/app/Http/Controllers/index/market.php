<?php

namespace App\Http\Controllers\index;

use App\Model\Good;
use App\model\User;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller as BaseController;
use PHPUnit\Framework\Constraint\Attribute;
use App\Model\Attribute_key;

class market extends BaseController
{
    //
    public function marketdisplay()
    {
        $data=Attribute_key::all()->toArray();
        $res=new Attribute_key();
        $list=$res->getTree($data);
        $user=User::first();
        $data = Good::get()->toArray();
        return view('index.common.index',['list'=>$list,'user'=>$user,'data'=>$data]);
    }
    public function class_list()
    {
        return view('index.common.index');
    }

    public function goodsDetails(Request $request)
    {
        $id = $request->post('id');
        $data = Good::find($id)->toArray();
        return view('index.common.goodsDetails',['data'=>$data]);
    }
}
