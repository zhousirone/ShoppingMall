<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = 'reply';
    public function add($data)
    {
        $this->reply_comment = $data['reply_comment'];
        $this->user_id = $data['user_id'];
        $this->comment_id = $data['comment_id'];
        return $this->save();
    }
}
