<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Goods as Good;

class Goods extends Controller
{
    public function list(Request $request)
    {
        $data = Good::all();
        return $data;
    }
    public function details(Request $request)
    {
        $id = $request->all('id');
        $data = new Good();
       return json_encode($data->where('id','=',$id)->get());
    }
}
