<?php

namespace app\controllers;

use shop\App;

class CurrencyController extends AppController{

    public function changeAction() {
        $currency = !empty($_GET['curr']) ? $_GET['curr'] : null;
        if ($currency) {
            $curr = App::$app->getProperties();
            if ($curr !== null){
                setcookie('currency', $currency, time()+3600 * 24 * 7, '/');
            }
        }
        redirect();
        //Дописать функционал пересчета корзины
    }
}