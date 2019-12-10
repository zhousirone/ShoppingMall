<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

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
