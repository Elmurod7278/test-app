<?php

namespace frontend\models;
use yii\base\Model;
class PersonForm extends Model
{
    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $gender;

    public function rules()
    {
        return[
            [['first_name','last_name','email','gender'],'required'],
            [['first_name','last_name','email','gender'],'string','max'=>50],
            ['gender','in','range'=>['male','female']]
        ];

    }


}