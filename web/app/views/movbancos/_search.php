<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchmodels\MovbancosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movbancos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_operacion_bancaria') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'debe') ?>

    <?php // echo $form->field($model, 'haber') ?>

    <?php // echo $form->field($model, 'id_caja') ?>

    <?php // echo $form->field($model, 'id_banco') ?>

    <?php // echo $form->field($model, 'id_cuenta') ?>

    <?php // echo $form->field($model, 'id_banco_dest') ?>

    <?php // echo $form->field($model, 'id_cuenta_dest') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
