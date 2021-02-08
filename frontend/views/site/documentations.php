<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<h1>Document</h1>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
<?= $form->field($model,'tittle') ?>
<?= $form->field($model,'author') ?>
<?= $form->field($model, 'imageFile')->fileInput() ?>
<?= Html::submitButton('Simpan',['class'=>'btn btn-primary']) ?>
<?php $form = ActiveForm::end(); ?>