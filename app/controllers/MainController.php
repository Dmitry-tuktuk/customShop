<?php

namespace app\controllers;

use RedBeanPHP\R;
use shop\App;
use shop\Cache;

class MainController extends AppController
{

    public function indexAction(){

        $posts = R::findAll('test');

        $post = R::findOne('test', 'id = ?', [2]);

        $this->setMeta(App::$app->getProperty('shop_name'), 'описание', 'ключи');

        $name = 'Test';
        $age = 'Test23';
        $params = ['name', 'email', 'password', 'desc'];

        $cache = Cache::instance();
        //$cache->delete('test');
        $data = $cache->get('test');
        if (!$data){
            $cache->set('test', $params);
        }

        debug($data);

        $this->set(compact('name', 'age', 'params', 'posts'));
    }
}