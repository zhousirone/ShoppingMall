<?php

namespace App\Http\Controllers\index;

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
        $user=User::find();

        return view('index.common.index',['list'=>$list,'user'=>$user]);
    }
    public function class_list()
    {
        return view('index.common.index');
    }
}
