<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TestController;
//artison创建控制器类
//php artisan make:controller 控制器名称
class UserController extends Controller //继承基类
{
    public function Test(){
        return phpinfo();
    }
}
