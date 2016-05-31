<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchmodels\ChoferesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="choferes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'denominacion') ?>

    <?= $form->field($model, 'direccion') ?>

    <?= $form->field($model, 'localidad') ?>

    <?= $form->field($model, 'codigo_postal') ?>

    <?php // echo $form->field($model, 'id_provincia') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'celular') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'web') ?>

    <?php // echo $form->field($model, 'id_tipo_impositivo') ?>

    <?php // echo $form->field($model, 'documento_impositivo') ?>

    <?php // echo $form->field($model, 'id_tipo_responsable') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
