<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('hello/:name', 'index/hello');

Route::get('Index','admin/DemoController/index');
Route::get('Add','admin/DemoController/add');
Route::post('Save','admin/DemoController/save');
Route::get('Del/:id','admin/DemoController/del');
Route::get('Edit/:id','admin/DemoController/edit');
Route::post('Edit/:id','admin/DemoController/updata');