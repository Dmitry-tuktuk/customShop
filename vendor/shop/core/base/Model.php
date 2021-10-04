<?php

namespace shop\base;

abstract class Model
{
    public $attributes = [];
    public $errors = [];
    public $rules = [];

    protected function __construct()
    {

    }

}