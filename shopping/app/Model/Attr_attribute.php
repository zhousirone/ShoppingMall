<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Attr_attribute
 *
 * @property int $id
 * @property string|null $attr_name
 * @property string|null $attr_sel
 * @property string|null $attr_write
 * @property string|null $attr_vals
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_attribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_attribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_attribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_attribute whereAttrName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_attribute whereAttrSel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_attribute whereAttrVals($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_attribute whereAttrWrite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Attr_attribute whereId($value)
 * @mixin \Eloquent
 */
class Attr_attribute extends Model
{
    protected $table='Attr_attribute';
    public $timestamps = false;
//    public function add($data)
//    {
////        var_dump($data);die;
//        $this->name = $data['name'];
//
//        return $this->save();
//    }
}
