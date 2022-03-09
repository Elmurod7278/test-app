<?php

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * User model
 *
 * @property integer $id
 */
class Person extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%person}}';
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name','last_name','email'],'required'],
            [['first_name','last_name','email'],'string'],
            [['created_at' , 'updated_at'], 'integer' ],
            ['email','email'],
        ];
    }
    public function attributeLabels(){
        return [
            'id'=>'ID',
            'first_name'=>'FIRST_NAME',
            'last_name'=>'LAST_NAME',
            'email'=>'EMAIL'
        ];
    }
}
