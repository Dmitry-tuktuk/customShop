<?php

namespace app\models;

use shop\App;

class Cart extends AppModel {

    public function addToCart($product, $qty = 1, $modColor = null, $modSize = null){
        if (!isset($_SESSION['cart.currency'])){
            $_SESSION['cart.currency'] = App::$app->getProperty('currency');
        }
        if ($modColor){
            $ID = "{$product->id}-{$modColor['id']}";
            $title = "{$product->title}({$modColor['color']})";
            $price = $modColor['price'];
        }
/*        if ($modSize AND !$modColor){
            $ID = "{$product->id}-{$modSize['id']}";
            $title = "{$product->title}({$modSize['size']})";
            $price = $modSize['price'];
        }
        if (($modSize AND $modColor) === null){
            $ID = "{$product->id}-{$modColor['id']}-{$modSize['id']}";
            $title = "{$product->title}({$modColor['color']})({$modSize['size']})";
            if ((int)$modSize['price'] > (int)$modColor['price']){
                $price = $modSize['price'];
            } else {
                $price = $modColor['price'];
            }
        }*/
        else {
            $ID = $product->id;
            $title = $product->title;
            $price = $product->price;
        }
        debug($_SESSION);
        debug($ID);
        debug($title);
        debug($price);

    }

}