<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Parametros */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parametros-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'id')->textInput() ?> -->

    <?= $form->field($model, 'denominacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'domicilio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'localidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_provincia')->textInput() ?>

    <?= $form->field($model, 'fecha_inicio')->textInput() ?>

    <?= $form->field($model, 'cuit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_tipo_responsable')->textInput() ?>

    <?= $form->field($model, 'nro_agente_retenc')->textInput() ?>

    <?= $form->field($model, 'nro_establec')->textInput() ?>

    <?= $form->field($model, 'enc_linea1_izq')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enc_linea2_izq')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enc_linea3_izq')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enc_linea1_der')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enc_linea2_der')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enc_linea3_der')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
