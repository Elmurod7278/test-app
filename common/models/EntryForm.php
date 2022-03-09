<?php
namespace common\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;
    public $age;

    public function rules()
    {
        return [
            [['name', 'email' , 'age'], 'required'],
            ['email', 'email'],
        ];
    }
}