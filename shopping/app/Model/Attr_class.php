<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
/**
 * App\Model\Attr_class
 *
 * @property int $id
 * @property int|null $cid
 * @property string|null $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Attr_goods[] $attr_goods
 * @property-read int|null $attr_goods_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_class newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_class newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_class query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_class whereCid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_class whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_class whereName($value)
 * @mixin \Eloquent
 */
=======
>>>>>>> dong
class Attr_class extends Model
{
    //
    protected $table='attr_class';
    public function attr_goods()
    {
        return $this->hasMany('App\Model\Attr_goods','cid','id');
    }

}
