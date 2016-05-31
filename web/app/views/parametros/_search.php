<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchmodels\ParametrosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parametros-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'denominacion') ?>

    <?= $form->field($model, 'domicilio') ?>

    <?= $form->field($model, 'localidad') ?>

    <?= $form->field($model, 'id_provincia') ?>

    <?php // echo $form->field($model, 'fecha_inicio') ?>

    <?php // echo $form->field($model, 'cuit') ?>

    <?php // echo $form->field($model, 'id_tipo_responsable') ?>

    <?php // echo $form->field($model, 'nro_agente_retenc') ?>

    <?php // echo $form->field($model, 'nro_establec') ?>

    <?php // echo $form->field($model, 'enc_linea1_izq') ?>

    <?php // echo $form->field($model, 'enc_linea2_izq') ?>

    <?php // echo $form->field($model, 'enc_linea3_izq') ?>

    <?php // echo $form->field($model, 'enc_linea1_der') ?>

    <?php // echo $form->field($model, 'enc_linea2_der') ?>

    <?php // echo $form->field($model, 'enc_linea3_der') ?>

    <?php // echo $form->field($model, 'fecha_desde') ?>

    <?php // echo $form->field($model, 'fecha_hasta') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
