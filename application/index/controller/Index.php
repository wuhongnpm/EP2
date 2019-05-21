<?php

namespace app\index\controller;

class Index
{
    public function index()
    {
        return 'Hello World';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
    public function demoa($name)
    {
        return '你好' .$name;
    }
}
