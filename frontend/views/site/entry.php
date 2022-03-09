<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $model common\models\EntryForm*/
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name') ?>

<?= $form->field($model, 'email') ?>

<?= $form->field($model, 'age') ?>

<div class="form-group">
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
