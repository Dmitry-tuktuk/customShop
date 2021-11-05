<?php

namespace shop\base;

use shop\Db;

abstract class Model extends \RedBeanPHP\SimpleModel {

    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct() {
        DB::instance();
    }

    public function load($data){
        foreach ($this->attributes as $name => $value) {
            if (isset($data[$name])){
                $this->attributes[$name] = $data[$name];
            }
        }
    }
}