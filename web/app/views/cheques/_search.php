<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchmodels\ChequesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cheques-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'terceros') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'id_caja') ?>

    <?= $form->field($model, 'id_banco') ?>

    <?php // echo $form->field($model, 'numero') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'cuit') ?>

    <?php // echo $form->field($model, 'fecha_venc') ?>

    <?php // echo $form->field($model, 'fecha_cobro') ?>

    <?php // echo $form->field($model, 'conciliado') ?>

    <?php // echo $form->field($model, 'clearing') ?>

    <?php // echo $form->field($model, 'importe') ?>

    <?php // echo $form->field($model, 'id_proveedor') ?>

    <?php // echo $form->field($model, 'id_cliente') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
