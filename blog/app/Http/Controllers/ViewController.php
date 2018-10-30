<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        $data = [
            'name' => '谢洋',
            'motor' => 'xue'
        ];

        $title='day day up';

        return view('my_laravel',compact('data','title'));
    }

    public function view(){
        //echo 234;
        echo config('database.connections.mysql.prefix');
    }
}
