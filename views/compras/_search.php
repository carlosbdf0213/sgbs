<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchmodels\ComprasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compras-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'mes_fiscal') ?>

    <?= $form->field($model, 'anio_fiscal') ?>

    <?= $form->field($model, 'id_proveedor') ?>

    <?= $form->field($model, 'id_tipo_comprobante') ?>

    <?php // echo $form->field($model, 'letra') ?>

    <?php // echo $form->field($model, 'sucursal') ?>

    <?php // echo $form->field($model, 'nro_comprobante') ?>

    <?php // echo $form->field($model, 'fecha') ?>

    <?php // echo $form->field($model, 'id_destino') ?>

    <?php // echo $form->field($model, 'detalle') ?>

    <?php // echo $form->field($model, 'neto_gravado') ?>

    <?php // echo $form->field($model, 'no_gravado') ?>

    <?php // echo $form->field($model, 'imp_internos') ?>

    <?php // echo $form->field($model, 'imp_municipales') ?>

    <?php // echo $form->field($model, 'imp_provinciales') ?>

    <?php // echo $form->field($model, 'imp_nacionales') ?>

    <?php // echo $form->field($model, 'percepcion') ?>

    <?php // echo $form->field($model, 'ing_brutos') ?>

    <?php // echo $form->field($model, 'perc_iva') ?>

    <?php // echo $form->field($model, 'perc_dgr') ?>

    <?php // echo $form->field($model, 'tasa_1_iva') ?>

    <?php // echo $form->field($model, 'importe_1_iva') ?>

    <?php // echo $form->field($model, 'tasa_2_iva') ?>

    <?php // echo $form->field($model, 'importe_2_iva') ?>

    <?php // echo $form->field($model, 'tasa_3_iva') ?>

    <?php // echo $form->field($model, 'importe_3_iva') ?>

    <?php // echo $form->field($model, 'tasa_4_iva') ?>

    <?php // echo $form->field($model, 'importe_4_iva') ?>

    <?php // echo $form->field($model, 'tasa_5_iva') ?>

    <?php // echo $form->field($model, 'importe_5_iva') ?>

    <?php // echo $form->field($model, 'total') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
