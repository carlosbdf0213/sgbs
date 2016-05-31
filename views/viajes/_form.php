<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Viajes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="viajes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'fecha_salida')->textInput() ?>

    <?= $form->field($model, 'kms_salida')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_llegada')->textInput() ?>

    <?= $form->field($model, 'kms_llegada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_chofer')->textInput() ?>

    <?= $form->field($model, 'id_camion')->textInput() ?>

    <?= $form->field($model, 'km_plus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'litros_comb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'importe_comb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'importe_peajes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'importe_gastos')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
