<?php

namespace app\models;

use RedBeanPHP\R;

class User extends AppModel {

    public $attributes = [
        'login' => '',
        'password' => '',
        'email' => '',
        'name' => '',
        'address' => ''
    ];

    public $rules = [
      'required' => [
          ['login'],
          ['password'],
          ['name'],
          ['email'],
          ['address']
      ],
      'email' => [
          ['email'],
      ],
      'lengthMin' => [
          ['password', 6],
      ]
    ];

    public function checkUnique(){
        $user = R::findOne('user', 'login = ? OR email = ?', [$this->attributes['login'], $this->attributes['email']] );
        if ($user){
            if ($user->login == $this->attributes['login']){
                $this->errors['unique'][] = 'This username is already in use';
            }
            if ($user->email == $this->attributes['email']){
                $this->errors['unique'][] = 'This email is already in use';
            }
            return false;
        }
        return true;
    }

}