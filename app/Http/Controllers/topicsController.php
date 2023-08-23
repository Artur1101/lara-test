<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Topic;

class topicsController extends Controller
{
    //Пример работы с базой данных через модель.
    public function index()
    {
        $topics_array = [];
        foreach (Topic::all() as $topic) {
            $topics_array[] = $topic->topicname;
        }

        return view('user.index', ['users' => $topics_array]);
    }

    //Пример работы напрямую с базой данных.
    public function direct()
    {
        $users = DB::select('select * from users where id > 0');
        $users_array = [];
        foreach ($users as $user) {
            $users_array[] = $user->name;
        }

        return view('user.index', ['users' => $users_array]);
    }

    public function create_topic()
    {      
        return view('topic.index');
    }

    public function create(Request $request)
    {
        $name = $request->input('ntopicnameame');
        die($name);
    }
}
