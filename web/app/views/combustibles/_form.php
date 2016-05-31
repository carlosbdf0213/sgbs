<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Combustibles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="combustibles-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_camion')->textInput() ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'litros')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'importe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'km_bitacora')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_proveedor')->textInput() ?>

    <?= $form->field($model, 'recorrido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'consumo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rendimiento')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
