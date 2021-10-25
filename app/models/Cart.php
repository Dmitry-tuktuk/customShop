<?php

namespace app\models;

use shop\App;

class Cart extends AppModel {
    public function addToCart($product, $qty = 1, $modColor, $modSize){
        if (!isset($_SESSION['cart.currency'])){
            $_SESSION['cart.currency'] = App::$app->getProperty('currency');
        }
        if ($modColor) {
            $ID = "{$product->id}-{$modColor['id']}";
            $title = "{$product->title}({$modColor['color']})";
            $price = $modColor['price'];
        }
         else if ($modSize && $modColor === null){
            $ID = "{$product->id}-{$modSize['id']}";
            $title = "{$product->title}({$modSize['size']})";
            $price = $modSize['price'];
        }
/*        elseif (isset($modSize) && isset($modColor) ){
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

        if (isset($_SESSION['cart'][$ID])){
            $_SESSION['cart'][$ID]['qty'] += $qty;
        } else {
            $_SESSION['cart'][$ID] = [
                'qty' => $qty,
                'title' => $title,
                'alias' => $product->alias,
                'price' => $price * $_SESSION['cart.currency']['value'],
                'img' => $product->img,
            ];
        }
        $_SESSION['cart']['qty'] = isset($_SESSION['cart']['qty']) ? $_SESSION['cart']['qty'] + $qty : $qty;
        $_SESSION['cart']['sum'] = isset($_SESSION['cart']['sum']) ? $_SESSION['cart']['sum'] + $qty * ($price * $_SESSION['cart.currency']['value']) : $qty * ($price * $_SESSION['cart.currency']['value']);
    }
}