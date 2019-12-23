<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    public $timestamps=false;
    public function class()
    {
        return $this->hasMany('App\Model\Attr_class','id','class_id');
    }
    public function brand()
    {
        return $this->hasMany('App\Model\Brand','id','brand_id');
    }
    public function warehouse()
    {
        return $this->hasMany('App\Model\Warehouse','id','warehouse_id');
    }


}
