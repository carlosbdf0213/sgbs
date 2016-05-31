<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Depositos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="depositos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_banco')->textInput() ?>

    <?= $form->field($model, 'id_cuenta')->textInput() ?>

    <?= $form->field($model, 'boleta')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'efectivo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_cheques')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
