<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Feedback_reply extends Model
{
    protected $table = 'feedback_reply';
    public function add($data)
    {
        $this->feedback_reply = $data['feedback_reply'];
        $this->feedback_id = $data['goods_id'];
        $this->user_id  = $data['user_id'];
        return $this->save();
    }
}
