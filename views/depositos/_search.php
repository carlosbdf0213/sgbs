<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchmodels\DepositosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="depositos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_banco') ?>

    <?= $form->field($model, 'id_cuenta') ?>

    <?= $form->field($model, 'boleta') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?php // echo $form->field($model, 'fecha') ?>

    <?php // echo $form->field($model, 'efectivo') ?>

    <?php // echo $form->field($model, 'total_cheques') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
