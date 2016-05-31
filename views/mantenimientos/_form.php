<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mantenimientos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mantenimientos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'id_camion')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'id_tipo_manten')->textInput() ?>

    <?= $form->field($model, 'fecha_revision')->textInput() ?>

    <?= $form->field($model, 'kms_revision')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'importe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_proveedor')->textInput() ?>

    <?= $form->field($model, 'fecha_ult_revision')->textInput() ?>

    <?= $form->field($model, 'dias_vencimiento')->textInput() ?>

    <?= $form->field($model, 'fecha_siguiente_revision')->textInput() ?>

    <?= $form->field($model, 'km_ult_revision')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'km_vto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'km_siguiente_revision')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observaciones')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
