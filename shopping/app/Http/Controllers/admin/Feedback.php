<?php

namespace App\Http\Controllers\admin;

use App\Http\Middleware\EncryptCookies;
use App\Model\Feedback_reply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Feedback as Feedbacks;

class Feedback extends Controller
{
    public function index()
    {
        $feedback = new Feedbacks();
        $data = $feedback->all();
        return view('admin/feedback/index', ['data'=>$data]);
    }
    public function feedbackReply(Request $request)
    {
        $id = $request->get('id');
        return view('admin/feedback/feedbackReply', ['id'=>$id]);
    }
    public function replyAdd(Request $request)
    {
        $arr = $request->post();
        $reply = new Feedback_reply();
        $reply->feedback_reply = $arr['data']['feedback_reply'];
        $reply->feedback_id   = $arr['data']['feedback_id'];
        $reply->user_id  = $arr['data']['user_id'];
        if ($reply->save())
        {
            echo 1;
        }else{
            echo 2;
        }
    }
}
