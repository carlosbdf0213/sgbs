<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Camiones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="camiones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_chofer')->textInput() ?>

    <?= $form->field($model, 'patente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modelo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anio_fabric')->textInput() ?>

    <?= $form->field($model, 'nro_chasis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nro_motor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_patente')->textInput() ?>

    <?= $form->field($model, 'ejes')->textInput() ?>

    <?= $form->field($model, 'tara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'carga_util')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fin_garantia')->textInput() ?>

    <?= $form->field($model, 'fecha_itv')->textInput() ?>

    <?= $form->field($model, 'fecha_ult_revision')->textInput() ?>

    <?= $form->field($model, 'kms_ult_revision')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_tipo_ult_manten')->textInput() ?>

    <?= $form->field($model, 'id_poliza')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
