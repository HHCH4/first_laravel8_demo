<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //必须
    protected $table = 'test';
    public $timestamps = false;

    //插入
    public function insert_1()
    {
        $int = $this->insert([
            'name' => '小黑'
        ]);
        return $int;
    }

    //查询
    public function select_1()
    {
        return $this->get();
    }

    //更新
    public function update_1()
    {
        return $this->where('id', '2')
            ->update(['name' => '小红']);
    }

    //删除
    public function delete_1()
    {
        return $this->where('id', 1)
            ->delete();
    }

    //分页
    public function page_1()
    {
        return $this->paginate(3);
    }
}
