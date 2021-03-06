<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchmodels\CuitpaisesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cuitpaises-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cuit_pais') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'codigo') ?>

    <?= $form->field($model, 'tipo_sujeto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
