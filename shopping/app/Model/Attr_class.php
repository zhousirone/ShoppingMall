<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Attr_class extends Model
{
    //
    protected $table='attr_class';
    public function attr_goods()
    {
        return $this->hasMany('App\Model\Attr_goods','cid','id');
    }

}
