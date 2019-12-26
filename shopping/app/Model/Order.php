<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    public function goods()
    {
        return $this->hasMany('App\Model\Good','id','goods_id');
    }
}
