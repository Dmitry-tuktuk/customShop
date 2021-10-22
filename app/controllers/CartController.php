<?php

namespace app\controllers;

use RedBeanPHP\R;

class CartController extends AppController {
    public function addAction(){

        $id = !empty($_GET['id']) ? (int)$_GET['id'] : null ;
        $qty = !empty($_GET['qty']) ? (int)$_GET['qty'] : null ;
        $color = !empty($_GET['color']) ? (int)$_GET['color'] : null ;
        $size = !empty($_GET['size']) ? (int)$_GET['size'] : null ;
        $mod_color = null;
        $mod_size = null;

        if ($id){
            $product = R::findOne('product', 'id = ?', [$id]);
            if (!$product){
                return false;
            }
            if ($color){
                $mod_color = R::getRow( 'SELECT  id, product_id, color, price FROM modification WHERE id = ? AND product_id = ?', [$color,$id]);
            }
            if ($size){
                $mod_size = R::getRow( 'SELECT  id, product_id, size, price FROM modification WHERE id = ? AND product_id = ?', [$size,$id]);
            }
        }
        die;
    }
}