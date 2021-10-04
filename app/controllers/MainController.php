<?php

namespace app\controllers;

use RedBeanPHP\R;
use shop\App;

class MainController extends AppController
{

    public function indexAction(){

        $posts = R::findAll('test');

        $post = R::findOne('test', 'id = ?', [2]);
        debug($post);

        $this->setMeta(App::$app->getProperty('shop_name'), 'описание', 'ключи');

        $name = 'Test';
        $age = 'Test23';
        $params = ['name', 'email', 'password'];

        $this->set(compact('name', 'age', 'params', 'posts'));
    }
}