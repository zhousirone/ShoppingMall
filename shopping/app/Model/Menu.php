<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
/**
 * App\Model\Menu
 *
 * @property int $id
 * @property string|null $menuname
 * @property string|null $url
 * @property int|null $pid
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Menu whereMenuname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Menu wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Menu whereUrl($value)
 * @mixin \Eloquent
 */
=======
>>>>>>> dong
class Menu extends Model
{
    protected $table = 'menus';
    public $timestamps=false;
    public function test($id)
    {
        $data=Admin::with(['roles'=>function($request){
            $request->with(['powers'=>function($request){
                $request->with('menus');
            }]);
        }])->find($id)->toArray();
        foreach ($data['roles'] as $k => $v){
            $a=$v['powers'];
        }
        return $a;
    }
    public function  getTree($data,$pid=0)
    {
        $tree=[];
        foreach ($data as $k=>$v){
            if ($v['pid']==$pid){
                $v['son']=$this->gettree($data,$v['id']);
                $tree[]=$v;
            }
        }
        return $tree;
    }
}
