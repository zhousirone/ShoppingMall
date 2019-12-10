<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Sku extends Model
{
    //一个SKU是靠一串唯一编码来标识的，比如1234A，1234B。一般来说一个平台下不会存在两个相同的SKU，或这一个店铺下不会存在两个相同的SKU。是一种表示库存进出计量的单位
    protected $table='sku';
    public function attr_goods()
    {
        return $this->hasMany('App\Model\Attr_goods','cid','id');
    }
}
