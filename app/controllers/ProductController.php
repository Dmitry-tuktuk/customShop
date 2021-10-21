<?php

namespace app\controllers;

use app\models\Breadcrumbs;
use app\models\Product;
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
        $breadcrumbs = Breadcrumbs::getBreadcrumbs($product->category_id, $product->title);

        //Связанные товары
        $related = R::getAll("SELECT * FROM related_product JOIN product ON product.id = related_product.related_id WHERE related_product.product_id = ?", [$product->id]);

        //Записать в куки просмотренные товары
        $p_model = new Product();
        $p_model->setRecentlyViewed($product->id);

        //Просмотренные товары
        $r_viewed = $p_model->getRecentlyViewed();
        $recentlyViewed = null;
        if ($r_viewed){
            $recentlyViewed = R::find('product', 'id IN (' . R::genSlots($r_viewed) . ') LIMIT 4', $r_viewed);
        }

        //Доп. параметры товара
        //Цвет
        $mods = R::findAll('modification', 'product_id = ?', [$product->id]);
        //Размер товара

        //Подключить шаринг товара

        //Подключить рейтинг товара

        //Галерея
        $gallery = R::findAll('gallery', 'product_id = ?', [$product->id]);

        $this->set(compact('product', 'related', 'gallery', 'recentlyViewed', 'breadcrumbs', 'mods'));
    }

}