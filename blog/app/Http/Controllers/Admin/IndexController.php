<?php
/**
 * Created by PhpStorm.
 * User: 29777
 * Date: 2018/10/26
 * Time: 14:16
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller{
    public function index(){
        return view('welcome');
        //echo 123;
    }

    public function login(){
        session(['admin'=>1]);
        return '<h1>登录</h1>';
    }
}