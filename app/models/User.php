<?php

namespace app\models;

class User extends AppModel {

    public $attributes = [
        'login' => '',
        'password' => '',
        'email' => '',
        'name' => '',
        'address' => ''
    ];

}