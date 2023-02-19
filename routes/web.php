<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
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

Route::get('/', function () {
    return view('welcome');
});

//创建方法：Route::请求方式（‘请求的URL’,匿名函数或者控制响应的方法）

//可用路由方法
//Route::get($uri, $callback);
//Route::post($uri, $callback);
//Route::put($uri, $callback);
//Route::patch($uri, $callback);
//Route::delete($uri, $callback);
//Route::options($uri, $callback);

//测试get
Route::get('Test',function (){
    echo 'hello 路由';
});

//匹配请求路由方式

//match
Route::match(['post','get'],'match',function (){
    echo 'match';
}); //表示匹配固定的请求方式路由

//any
Route::any('any',function (){
    echo 'any';
});

//路由参数
//必填参数 单独的url地址，带着参数的必选
Route::get('bitan/{id}',function ($id){
   return 'User' .$id;
});

//可选参数

Route::get('kexuan/{name?}',function ($name = '默认值'){
   return $name;
});


//路由组
Route::prefix('admin/admin1/admin2')->group(function () {
    Route::get('a', function () {
        return 'a';
    });
});

//调用控制器方法
Route::get('Controller', [UserController::class, 'Test']);

//CRUD
Route::get('insert', [UserController::class, 'insert']);
Route::get('update', [UserController::class, 'update']);
Route::get('select', [UserController::class, 'select']);
Route::get('delete', [UserController::class, 'delete']);


//调用
Route::get("views", function () {
    return view('index');
});

//数组传值
Route::get('array/{title?}', function ($title = '我是标题') {
    return view('index', ['title' => $title]);
});

//with传值
Route::get('with/{title?}', function ($title = '标题2') {
    return view('index')->with('title', $title);
});

//compact
Route::get('compact/{title?}', function ($title = '标题2', $name = '我是name') {
    return view('index', compact('title', 'name'));
});

//判断视图文件是否存在
Route::get('Test2', function () {
    if (View::exists('index')) {
        echo '视图存在';
    } else {
        echo '视图不存在';
    };
});

//函数案例
Route::get('hanshu', function () {
    $time = strtotime(now());
    return View('index', compact('time'));
});

//
