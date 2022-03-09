<?php
use yii\helpers\Html;
/* @var $model common\models\EntryForm*/
?>
<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
    <li><label>Ege</label>: <?= Html::encode($model->age) ?></li>
</ul>