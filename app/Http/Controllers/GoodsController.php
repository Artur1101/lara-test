<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GoodsController extends Controller
{
    public function show()
    {
        $goods = DB::select('select * from goods where name');
        $goods_array = [];
        foreach ($goods as $good) {
            $goods_array[] = $good->name;
        }

        return view('homwork4', ['goods' => $goods_array]);
    }
}
