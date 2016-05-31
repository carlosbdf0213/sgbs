<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchmodels\CombustiblesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="combustibles-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_camion') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'litros') ?>

    <?= $form->field($model, 'importe') ?>

    <?php // echo $form->field($model, 'km_bitacora') ?>

    <?php // echo $form->field($model, 'id_proveedor') ?>

    <?php // echo $form->field($model, 'recorrido') ?>

    <?php // echo $form->field($model, 'consumo') ?>

    <?php // echo $form->field($model, 'rendimiento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
