<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Attribute_key extends Model
{
    //
    protected $table='attribute_key';
        public function  getTree($data,$class_id=0)
    {
        $tree=[];
        foreach ($data as $k=>$v){
            if ($v['class_id']==$class_id){
                $v['son']=$this->gettree($data,$v['id']);
                $tree[]=$v;
            }
        }
        return $tree;
    }
}
