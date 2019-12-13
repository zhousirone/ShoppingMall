<?php

namespace App\Http\Controllers\admin;

use App\Model\Conmment;
use App\Model\Reply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Comment extends Controller
{
    //评论审核
    public function index()
    {
        $data = Conmment::where('state','=',1)->get();
        return view('admin/Comment/index', ['data'=>$data]);
    }
    //审核
    public function state(Request $request)
    {
        $id = $request->post('id');
        $state = $request->post('state');
        $comment = new Conmment();
        if ($comment->upd($id,$state)){
            echo 1;
        }else{
            echo 2;
        }
    }
    //评论回复
    public function commentShow()
    {
        $data = Conmment::where('state',2)->get();
        return view('admin/Comment/commentShow',['data'=>$data]);
    }
    public function reply(Request $request)
    {
        $id = $request->get('id');
        return view('admin/Comment/reply',['id'=>$id]);
    }
    public function replyAdd(Request $request)
    {
        $data = $request->post();
        $reply = new Reply();
        if ($reply->add($data['data']))
        {
            echo 1;
        }else{
            echo 2;
        }
    }

}
