<?php

namespace shop\base;

use shop\Db;

abstract class Model extends \RedBeanPHP\SimpleModel
{
    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct()
    {
        DB::instance();

    }

}