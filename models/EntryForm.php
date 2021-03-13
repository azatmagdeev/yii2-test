<?php

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            //name и email обязательны
            [['name', 'email'], 'required'],
            //email валидация
            ['email', 'email'],
        ];
    }
}