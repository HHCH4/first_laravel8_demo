<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Models\Test;


//artison创建控制器类
//php artisan make:controller 控制器名称
class UserController extends Controller //继承基类
{
    public function Test()
    {
        return phpinfo();
    }

    //添加数据
    public function insert()
    {
        return DB::table('test')
            ->insert([
                'name' => '小明'
            ]);
    }

    //修改
    public function update()
    {
        return DB::table('test')
            ->where('id', 1)
            ->update([
                'name' => '小蓝'
            ]);
    }

    //查询数据
    public function select()
    {
        $list = DB::table('test')
            ->get();
        return View('index', compact('list'));

//        $user = DB::select('select * from test');
//        dd($user);
    }

    //删除数据
    public function delete()
    {
        return DB::table('test')
            ->where('id', '2')
            ->delete();
    }

    //调用模型
    public function model()
    {
        $model = new Test();
        $list = $model->insert_1();
        if ($list > 0) {
            return View('index', compact('list'));
        } else {
            return '错误';
        }
    }

    //调用模型查询
    public function sl2()
    {
        $model = new Test();
        $list = $model->select_1();
        return View('index', compact('list'));
    }

    //更新
    public function up2()
    {
        $model = new Test();
        $int = $model->update_1();
        return $int;
    }

    //删除
    public function de2()
    {
        $model = new Test();
        $int = $model->delete_1();
        return $int;
    }

    //分页
    public function page_1()
    {
        $model = new Test();
        $list = $model->page_1();
        return View('index', compact('list'));
    }

}
