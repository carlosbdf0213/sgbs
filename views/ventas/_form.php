<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ventas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ventas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_cliente')->textInput() ?>

    <?= $form->field($model, 'id_tipo_comprobante')->textInput() ?>

    <?= $form->field($model, 'letra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sucursal')->textInput() ?>

    <?= $form->field($model, 'nro_comprobante')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'detalle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'neto_gravado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_gravado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imp_internos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imp_municipales')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imp_provinciales')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imp_nacionales')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'percepcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ing_brutos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perc_iva')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perc_dgr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tasa_1_iva')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'importe_1_iva')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tasa_2_iva')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'importe_2_iva')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tasa_3_iva')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'importe_3_iva')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tasa_4_iva')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'importe_4_iva')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tasa_5_iva')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'importe_5_iva')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
