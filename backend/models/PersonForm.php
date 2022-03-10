<?php

namespace backend\models;

use yii\base\Model;

class PersonForm extends Model
{
    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $file;

    public function rules()
    {
        return[
            [['first_name','last_name','email', 'file'],'required'],
            [['first_name','last_name','email','file'],'string'],
            ['email','email'],
        ];
        
    }

}