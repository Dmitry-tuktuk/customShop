<?php

namespace shop;

class Db
{

    use TSingletone;

    public function __construct()
    {
        $db = require CONFIG . '/config_DB.php';
    }

}