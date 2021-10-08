<?php

namespace shop;

class ErrorHandler {
    public function __construct() {
        if(DEBUG) {
            error_reporting(-1);
        } else {
            error_reporting(0);
        }
        set_exception_handler([$this, 'exceptionHandler']);
    }

    public function exceptionHandler($exceptions) {
        $this->logErrors($exceptions->getMessage(), $exceptions->getFile(), $exceptions->getLine());
        $this->displayError('Исключения', $exceptions->getMessage(), $exceptions->getFile(), $exceptions->getLine(), $exceptions->getCode());
    }

    protected function logErrors($message = '', $file = '', $line = '') {
        error_log("[". date('Y-m-d H:i:s') . "] Текст ошибки: {$message} | Файл: {$file} | Строка: {$line} \n===============-\n",
            3, ROOT . '/tmp/errors.log' );
    }

    protected function displayError($errorNum, $errorStr, $errorFile, $errorLine, $response = 404 ) {
        http_response_code($response);
        if ($response == 404 && !DEBUG) {
            require_once WWW . '/errors/404.php';
            die;
        } if (DEBUG) {
            require_once WWW . '/errors/dev.php';
        } else {
            require_once WWW . '/errors/prod.php';
        }
        die;
    }
}