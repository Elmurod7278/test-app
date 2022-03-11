<?php

namespace frontend\controllers;

use frontend\models\PersonForm;
use common\models\Person;
use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;

class PersonController extends Controller
{
    public function actionIndex()
    {

        return $this->render('index');
    }

    public function actionCreate(){
        $model = new PersonForm();
        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {

            //file upload
            $file_name = $model->first_name;
            $model->file = UploadedFile::getInstance($model,'file');
            $model->file->saveAs('uploads/'.$file_name.'.'.$model->file->extension);

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