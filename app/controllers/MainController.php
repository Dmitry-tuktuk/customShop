<?php

namespace app\controllers;

use RedBeanPHP\R;
use shop\App;
use shop\Cache;

class MainController extends AppController
{

    public function indexAction(){

        $this->setMeta(App::$app->getProperty('shop_name'), 'описание', 'ключи');

        //Как передать другой вид стр ?

    }
}