<?php

namespace App\Http\Controllers;

use App\Http\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        /*$pdo = DB::connection()->getPdo();
        dd($pdo);*/
        //echo 123;
        //DB::insert('insert into blog_user (user_id,user_name,user_pass) values (?,?,?)',[5,'wangerma','123']);
        //DB::insert('insert into blog_user (user_name,user_pass) values (?,?)',['ayi','123']);
        /*$users = DB::table('user')->where('user_id','>',1)->get();
        dd($users);*/
        //$user = User::where('user_id',1)->get();
        $user = User::find(1);
        $user->user_name='wangwu';
        $user->update();
        dd($user);



    }
}
