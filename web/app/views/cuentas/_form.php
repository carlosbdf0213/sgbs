<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cuentas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cuentas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_banco')->textInput() ?>

    <?= $form->field($model, 'tipo')->dropDownList([ 'Cuenta Corriente' => 'Cuenta Corriente', 'Caja de Ahorro' => 'Caja de Ahorro', 'Cuenta Sueldos' => 'Cuenta Sueldos', 'Cuenta de la Seg Social' => 'Cuenta de la Seg Social', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'numero')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
