<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchmodels\RepuestosmantenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="repuestosmanten-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_repuesto') ?>

    <?= $form->field($model, 'id_mantenimiento') ?>

    <?= $form->field($model, 'cantidad') ?>

    <?= $form->field($model, 'importe') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
