<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchmodels\PolizasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="polizas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cia') ?>

    <?= $form->field($model, 'contacto') ?>

    <?= $form->field($model, 'telefono') ?>

    <?= $form->field($model, 'celular') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'fecha_pago') ?>

    <?php // echo $form->field($model, 'fecha_venc') ?>

    <?php // echo $form->field($model, 'cobertura') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
