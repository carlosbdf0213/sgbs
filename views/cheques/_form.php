<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cheques */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cheques-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'terceros')->textInput() ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'id_caja')->textInput() ?>

    <?= $form->field($model, 'id_banco')->textInput() ?>

    <?= $form->field($model, 'numero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->dropDownList([ 'Cartera' => 'Cartera', 'Depositado' => 'Depositado', 'Rechazado' => 'Rechazado', 'Entregado' => 'Entregado', 'Reemplazado' => 'Reemplazado', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'cuit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_venc')->textInput() ?>

    <?= $form->field($model, 'fecha_cobro')->textInput() ?>

    <?= $form->field($model, 'conciliado')->textInput() ?>

    <?= $form->field($model, 'clearing')->dropDownList([ 24 => '24', 48 => '48', 72 => '72', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'importe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_proveedor')->textInput() ?>

    <?= $form->field($model, 'id_cliente')->textInput() ?>

    <?= $form->field($model, 'observaciones')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
