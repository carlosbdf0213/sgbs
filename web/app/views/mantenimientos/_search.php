<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchmodels\MantenimientosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mantenimientos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_camion') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'id_tipo_manten') ?>

    <?php // echo $form->field($model, 'fecha_revision') ?>

    <?php // echo $form->field($model, 'kms_revision') ?>

    <?php // echo $form->field($model, 'importe') ?>

    <?php // echo $form->field($model, 'id_proveedor') ?>

    <?php // echo $form->field($model, 'fecha_ult_revision') ?>

    <?php // echo $form->field($model, 'dias_vencimiento') ?>

    <?php // echo $form->field($model, 'fecha_siguiente_revision') ?>

    <?php // echo $form->field($model, 'km_ult_revision') ?>

    <?php // echo $form->field($model, 'km_vto') ?>

    <?php // echo $form->field($model, 'km_siguiente_revision') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
