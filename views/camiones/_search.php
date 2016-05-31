<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchmodels\CamionesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="camiones-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_chofer') ?>

    <?= $form->field($model, 'patente') ?>

    <?= $form->field($model, 'marca') ?>

    <?= $form->field($model, 'modelo') ?>

    <?php // echo $form->field($model, 'tipo') ?>

    <?php // echo $form->field($model, 'anio_fabric') ?>

    <?php // echo $form->field($model, 'nro_chasis') ?>

    <?php // echo $form->field($model, 'nro_motor') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'fecha_patente') ?>

    <?php // echo $form->field($model, 'ejes') ?>

    <?php // echo $form->field($model, 'tara') ?>

    <?php // echo $form->field($model, 'carga_util') ?>

    <?php // echo $form->field($model, 'fin_garantia') ?>

    <?php // echo $form->field($model, 'fecha_itv') ?>

    <?php // echo $form->field($model, 'fecha_ult_revision') ?>

    <?php // echo $form->field($model, 'kms_ult_revision') ?>

    <?php // echo $form->field($model, 'id_tipo_ult_manten') ?>

    <?php // echo $form->field($model, 'id_poliza') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
