<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchmodels\MultasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="multas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_chofer') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'alegato') ?>

    <?php // echo $form->field($model, 'importe') ?>

    <?php // echo $form->field($model, 'fecha_venc') ?>

    <?php // echo $form->field($model, 'fecha_pago') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
