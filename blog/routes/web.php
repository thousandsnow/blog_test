<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/view',function (){
    return view('my_laravel');
});*/

Route::get('/','IndexController@index');

Route::get('view','ViewController@view');

Route::group(['prefix' => 'admin','namespace'=>'Admin','middleware'=>['web','admin.login']], function (){

    Route::get('index', 'IndexController@index');
    Route::resource('article','ArticleController');
});


Route::get('user', ['as' => 'profile', function () {
    echo route('profile');
    return '<h1>命名路由</h1>';
}]);

Route::group(['middleware'=>['web']],function (){

    Route::get('admin/login', 'Admin\IndexController@login');

    /*Route::get('/', function () {
        session(['key'=>456]);
        return view('welcome');
    });*/

    Route::get('/test', function () {
        echo session('key');
        return 'test';
    });
});

//Route::get('test', 'Admin\IndexController@index')->name('profile');

/*Route::get('test', 'Admin\IndexController@index');*/

/*Route::get('test', [
    'as' => 'profile', 'uses' => 'Admin\IndexController@index'
]);*/

/*Route::get('user/{id}', function ($id) {  //必选参数
    return 'User '.$id;
});*/

/*Route::get('/hd', function () {
    //return view('welcome');
    echo "get";
});*/

/*Route::post('/hd', function () {
    //return view('welcome');
    echo "post";
});*/

/*Route::put('/hd', function () {
    //return view('welcome');
    echo "put";
});*/

/*Route::patch('/hd', function () {
    //return view('welcome');
    echo "patch";
});*/

/*Route::delete('/hd', function () {
    //return view('welcome');
    echo "delete";
});*/

/*Route::options('/hd', function () {
    //return view('welcome');
    echo "options";  //可以
});*/

/*Route::match(['get', 'post','patch'], '/test', function () {
    echo "match";   //post,patch不行
});*/

/*Route::any('foo', function () {
    echo "foo";
});*/