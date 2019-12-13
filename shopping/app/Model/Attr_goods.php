<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Attr_goods extends Model
{
    protected $table='attr_goods';
    protected $fillable=['name'];//过滤字段
    public $timestamps = false;//如果您不希望 Eloquent 维护这些字段，在模型中添加以下属性
    public function Attr_attribute()
    {

        return $this->belongsToMany(Attr_attribute::class,'t_a','type_id','attr_id');
    }

    //商品关联分类
    public function Attr_class()
    {
        return $this->belongsToMany(Attr_class::class,'t_a','type_id','class_id');
    }
}
