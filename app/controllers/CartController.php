<?php

namespace app\controllers;

use app\models\Cart;
use RedBeanPHP\R;

class CartController extends AppController {
    public function addAction(){

        $id = !empty($_GET['id']) ? (int)$_GET['id'] : null ;
        $qty = !empty($_GET['qty']) ? (int)$_GET['qty'] : null ;
        $color = !empty($_GET['color']) ? (int)$_GET['color'] : null ;
        $size = !empty($_GET['size']) ? (int)$_GET['size'] : null ;
        $modColor = null;
        $modSize = null;

        if ($id){
            $product = R::findOne('product', 'id = ?', [$id]);
            if (!$product){
                return false;
            }
            if ($color){
                $modColor = R::getRow( 'SELECT  id, product_id, color, price FROM modification WHERE id = ? AND product_id = ?', [$color,$id]);
            }
            if ($size){
                $modSize = R::getRow( 'SELECT  id, product_id, size, price FROM modification WHERE id = ? AND product_id = ?', [$size,$id]);
            }
        }

        $cart = new Cart();
        $cart->addToCart($product, $qty, $modColor, $modSize);
        if ($this->isAjax()){
            $this->loadView('cart_modal');
        }
        redirect();
    }
}