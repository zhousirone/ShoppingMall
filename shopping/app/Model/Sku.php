<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
/**
 * App\model\Sku
 *
 * @property int $id
 * @property string|null $price
 * @property string|null $price_value
 * @property string|null $color
 * @property string|null $color_value
 * @property string|null $size
 * @property string|null $size_value
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Attr_goods[] $attr_goods
 * @property-read int|null $attr_goods_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\model\Sku newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\model\Sku newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\model\Sku query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\model\Sku whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\model\Sku whereColorValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\model\Sku whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\model\Sku wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\model\Sku wherePriceValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\model\Sku whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\model\Sku whereSizeValue($value)
 * @mixin \Eloquent
 */
=======
>>>>>>> dong
class Sku extends Model
{
    //一个SKU是靠一串唯一编码来标识的，比如1234A，1234B。一般来说一个平台下不会存在两个相同的SKU，或这一个店铺下不会存在两个相同的SKU。是一种表示库存进出计量的单位
    protected $table='sku';
    public function attr_goods()
    {
        return $this->hasMany('App\Model\Attr_goods','cid','id');
    }
}
