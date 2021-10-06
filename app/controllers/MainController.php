<?php

namespace app\controllers;

use RedBeanPHP\R;
use shop\App;
use shop\Cache;

class MainController extends AppController
{

    public function indexAction(){

        /*Запрос выборки нужных данных из базы*/
        $categories = R::find('category', 'LIMIT 2');

        $this->setMeta(App::$app->getProperty('shop_name'), 'описание', 'ключи');

        //Как передать другой вид стр ?

        /*Передача данных в вид*/
        $this->set(compact('categories'));

    }
}