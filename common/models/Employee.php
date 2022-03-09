<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property int|null $age
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property float|null $salary
 */
class Employee extends BaseTimestampedModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['age', 'created_at', 'updated_at'], 'integer'],
            [['salary'], 'number'],
            [['first_name', 'last_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'age' => Yii::t('app', 'Age'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'salary' => Yii::t('app', 'Salary'),
        ];
    }
}
