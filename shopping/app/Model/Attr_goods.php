<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
/**
 * App\Model\Attr_goods
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $class
 * @property string|null $status
 * @property int|null $pid
 * @property int|null $cid
 * @property int|null $place_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Attr_attribute[] $Attr_attribute
 * @property-read int|null $attr_attribute_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Attr_class[] $Attr_class
 * @property-read int|null $attr_class_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_goods newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_goods newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_goods query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_goods whereCid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_goods whereClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_goods whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_goods whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_goods wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_goods wherePlaceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_goods whereStatus($value)
 * @mixin \Eloquent
 */
=======
>>>>>>> dong
class Attr_goods extends Model
{
    protected $table='attr_goods';
    protected $fillable=['name'];//过滤字段
    public $timestamps = false;//如果您不希望 Eloquent 维护这些字段，在模型中添加以下属性
    public function Attr_attribute()
    {

        return $this->belongsToMany(Attr_attribute::class,'t_a','type_id','attr_id');
    }
    public function add($data)
    {
//        var_dump($data);die;
      $this->name = $data['name'];

        return $this->save();
    }
    //商品关联分类
    public function Attr_class()
    {
        return $this->belongsToMany(Attr_class::class,'t_a','type_id','class_id');
    }
}
