<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Siniestros */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siniestros-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'referencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_chofer')->textInput() ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'fecha_declaracion')->textInput() ?>

    <?= $form->field($model, 'fecha_pago')->textInput() ?>

    <?= $form->field($model, 'importe_indemnizacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'importe_danios')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cia_contrario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telef_contrario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre_contrario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'poliza_contrario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patente_contrario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marca_contrario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modelo_contrario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color_contrario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notas_contrario')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'actuaciones')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
