<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Conmment extends Model
{
    protected $table = 'comment';

    public function reply()
    {
        return $this->hasMany('App\Model\Reply','comment_id','id');
    }

    public function upd($id,$state)
    {
        return $this->where('id',$id)->update(['state'=>$state]);
    }
}
