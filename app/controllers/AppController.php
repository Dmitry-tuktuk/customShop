<?php

namespace app\controllers;

use app\models\AppModel;
use app\widgets\currency\Currency;
use shop\App;
use shop\base\Controller;

class AppController extends Controller {

    public function __construct($route) {
        parent::__construct($route);
        new AppModel();
        App::$app->setProperty('currencies', Currency::getCurrencies());
        App::$app->setProperty('currency', Currency::getCurrency(App::$app->getProperty('currencies')));
        debug(App::$app->getProperties());

        //Запись тестовой куки валют
        setcookie('currency', 'UAH', time()+3600*24*7, '/');
    }
}