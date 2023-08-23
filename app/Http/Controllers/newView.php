<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class newView extends Controller
{
    public function show()
    {
        $var = "<h1>Коментария пользоватеоья</h1>";
        $Comments = DB::select('select * from Comments where Comment');
        
        return view('newView', ['var' => $var, 'Comments' => $Comments]);   
    }
}