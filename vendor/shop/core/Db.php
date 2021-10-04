<?php

namespace shop;

use http\Exception;
use \RedBeanPHP\R as R;

class Db
{

    use TSingletone;

    public function __construct()
    {
        $db = require CONFIG . '/config_DB.php';

        R::setup($db['dsn'], $db['user'], $db['password']);

        if(!R::testConnection()){
            throw new \Exception('Нет соединения с бд', 500);
        }
        R::freeze(true);
        if (DEBUG){
            R::debug(true, 1);
        }
    }

}