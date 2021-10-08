<?php

namespace app\widgets\currency;

use RedBeanPHP\R;

class Currency {

    protected $tpl;
    protected $currecies;
    protected $currency;

    public function __construct() {
        $this->tpl = __DIR__ . '/currency_tpl/currency.php';
        $this->run();
    }

    protected function run() {
/*        $this->getCurrencies();
        $this->getCurrency();*/
        $this->getHtml();
    }

    public static function getCurrencies() {
        return R::getAssoc("SELECT code, title, symbol_left, symbol_right, value, base FROM currency ORDER BY base DESC ");
    }

    public static function getCurrency($currencies) {
        if(isset($_COOKIE['currency']) && array_key_exists($_COOKIE['currency'], $currencies)) {
            $key = $_COOKIE['currency'];
        } else {
            $key = key($currencies);
        }

        $currency = $currencies[$key];
        $currency['code'] = $key;

        return $currency;
    }

    public static function getHtml() {

    }
}