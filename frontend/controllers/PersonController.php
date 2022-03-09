<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\PersonForm;

class PersonController extends Controller
{
    public function actionIndex(){
        return $this->render(['index'])
    }
}