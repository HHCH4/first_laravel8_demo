<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //必须
    protected $table = 'test';
    public $timestamps = false;

    public function Test()
    {
        $int = $this->insert([
            'name' => '小黑'
        ]);
        return $int;
    }
}
