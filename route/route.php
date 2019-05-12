<?php


Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('hello/:name', 'index/hello');

return [

];

//参数传入的方式
Route::rule(':version/user/:id','api/:version.User/read');