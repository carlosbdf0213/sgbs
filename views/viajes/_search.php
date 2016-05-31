<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchmodels\ViajesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="viajes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fecha_salida') ?>

    <?= $form->field($model, 'kms_salida') ?>

    <?= $form->field($model, 'fecha_llegada') ?>

    <?= $form->field($model, 'kms_llegada') ?>

    <?php // echo $form->field($model, 'id_chofer') ?>

    <?php // echo $form->field($model, 'id_camion') ?>

    <?php // echo $form->field($model, 'km_plus') ?>

    <?php // echo $form->field($model, 'litros_comb') ?>

    <?php // echo $form->field($model, 'importe_comb') ?>

    <?php // echo $form->field($model, 'importe_peajes') ?>

    <?php // echo $form->field($model, 'importe_gastos') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
