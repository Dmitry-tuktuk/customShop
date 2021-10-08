<?php

namespace shop;

use http\Exception;
use \RedBeanPHP\R as R;

class Db {

    use TSingletone;

    public function __construct() {
        $db = require CONFIG . '/config_DB.php';
        R::setup($db['dsn'], $db['user'], $db['password']);
        R::freeze(true);
        if(!R::testConnection()) {
            throw new \Exception('Нет соединения с бд', 500);
        }
        if (DEBUG) {
            R::debug(true, 1);
        }
    }
}