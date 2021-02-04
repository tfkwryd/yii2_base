<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<h1>Document</h1>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model,'tittle') ?>
<?= $form->field($model,'author') ?>
<?= Html::submitButton('Simpan',['class'=>'btn btn-primary']) ?>
<?php $form = ActiveForm::end(); ?>