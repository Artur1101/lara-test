<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ollHomwork extends Controller
{
    public function show()
    {
        $var = "<h1>Первая страница домашней работы</h1>";
        return view('homwork1', ['var' => $var]);   
    }
    public function view1()
    {
        $var1 = "<h1>Втарая страница домашней работы</h1>";
        return view('homwork2', ['var1' => $var1]);
               
    }
    public function print()
    {
        $var2 = "<h1>Третьяя страница домашней работы</h1>";
        return view('homwork3', ['var2' => $var2]);
              
    }
}