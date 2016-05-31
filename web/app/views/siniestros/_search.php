<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchmodels\SiniestrosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siniestros-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'referencia') ?>

    <?= $form->field($model, 'notas') ?>

    <?= $form->field($model, 'id_chofer') ?>

    <?= $form->field($model, 'fecha') ?>

    <?php // echo $form->field($model, 'fecha_declaracion') ?>

    <?php // echo $form->field($model, 'fecha_pago') ?>

    <?php // echo $form->field($model, 'importe_indemnizacion') ?>

    <?php // echo $form->field($model, 'importe_danios') ?>

    <?php // echo $form->field($model, 'cia_contrario') ?>

    <?php // echo $form->field($model, 'telef_contrario') ?>

    <?php // echo $form->field($model, 'nombre_contrario') ?>

    <?php // echo $form->field($model, 'poliza_contrario') ?>

    <?php // echo $form->field($model, 'patente_contrario') ?>

    <?php // echo $form->field($model, 'marca_contrario') ?>

    <?php // echo $form->field($model, 'modelo_contrario') ?>

    <?php // echo $form->field($model, 'color_contrario') ?>

    <?php // echo $form->field($model, 'notas_contrario') ?>

    <?php // echo $form->field($model, 'actuaciones') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
