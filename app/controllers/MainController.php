<?php

namespace app\controllers;

use shop\App;
use shop\Cache;
use RedBeanPHP\R;

class MainController extends AppController {

    public function indexAction(){

        //Вывести количество товара в категории?

        /*Запрос выборки нужных данных из базы*/
        $categories = R::find('category', 'LIMIT 2');
        $this->setMeta(App::$app->getProperty('shop_name'), 'описание', 'ключи');

        $products = R::findAll('product', 'LIMIT 8');
        $productsBestseller = R::findAll('product', "label_id = '1' AND status = '1' LIMIT 8");
        $productsSale = R::findAll('product', "label_id = '2' AND status = '1' LIMIT 8");
        $productsNew = R::findAll('product', "label_id = '3' AND status = '1' LIMIT 8");

        /*Передача данных в вид*/
        $this->set(compact('categories','products', 'productsSale', 'productsBestseller', 'productsNew'));

    }
}