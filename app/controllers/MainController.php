<?php

namespace app\controllers;


use shop\App;

class MainController extends AppController
{

    public function indexAction(){

        $this->setMeta(App::$app->getProperty('shop_name'), 'описание', 'ключи');

        $name = 'Test';
        $age = 'Test23';
        $params = ['name', 'email', 'password'];

        $this->set(compact('name', 'age', 'params'));
    }
}