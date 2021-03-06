<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tipomanten */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipomanten-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipo')->dropDownList([ 'Chapa y pintura' => 'Chapa y pintura', 'Reparación' => 'Reparación', 'Revisión' => 'Revisión', 'Lavado' => 'Lavado', 'Mantenimiento' => 'Mantenimiento', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
