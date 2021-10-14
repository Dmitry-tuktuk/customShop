<?php

namespace app\controllers;

use RedBeanPHP\R;

class ProductController extends AppController {

    public function viewAction(){
        $alias = $this->route['alias'];
        $product = R::findOne('product', "alias = ? AND status = '1' ", [$alias]);
        if (!$product){
            throw new \Exception('Страница не найдена', 404);
        }

        //Meta
        $this->setMeta($product->title, $product->description, $product->keywords);

        //Хлебные крошки

        //Связанные товары
        $related = R::getAll("SELECT * FROM related_product JOIN product ON product.id = related_product.related_id WHERE related_product.product_id = ?", [$product->id]);

        //Записать в куки товары просмотренные ранее, вывести их

        //Доп. параметры товара

        //Подключить шаринг товара

        //Галерея
        $gallery = R::findAll('gallery', 'product_id = ?', [$product->id]);

        $this->set(compact('product', 'related', 'gallery'));
    }

}