<?php

namespace backend\controllers;

use backend\models\PersonForm;
use common\models\Person;
use yii\web\Controller;

class PersonController extends Controller
{
    public function actionIndex()
    {

        return $this->render('index');
    }

    public function actionCreate()
    {
        $model = new PersonForm();
        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            $person = new Person();
            $person->setAttributes($model->attributes);
            if ($person->save()) {
                return $this->render('index');
            }
            else{
                echo "Your application has not been successfully done";
            }
        }
        return $this->render('form', [
            'model' => $model,
        ]);
    }
}