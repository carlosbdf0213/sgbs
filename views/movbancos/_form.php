<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Movbancos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movbancos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'id_operacion_bancaria')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'debe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'haber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_caja')->textInput() ?>

    <?= $form->field($model, 'id_banco')->textInput() ?>

    <?= $form->field($model, 'id_cuenta')->textInput() ?>

    <?= $form->field($model, 'id_banco_dest')->textInput() ?>

    <?= $form->field($model, 'id_cuenta_dest')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
