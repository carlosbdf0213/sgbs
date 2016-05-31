<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchmodels\AgendaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="agenda-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tipo') ?>

    <?= $form->field($model, 'categoria') ?>

    <?= $form->field($model, 'prioridad') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?php // echo $form->field($model, 'id_usuario') ?>

    <?php // echo $form->field($model, 'fecha') ?>

    <?php // echo $form->field($model, 'hora') ?>

    <?php // echo $form->field($model, 'duracion') ?>

    <?php // echo $form->field($model, 'todo_dia') ?>

    <?php // echo $form->field($model, 'asunto') ?>

    <?php // echo $form->field($model, 'lugar') ?>

    <?php // echo $form->field($model, 'aviso') ?>

    <?php // echo $form->field($model, 'aviso_mail') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <?php // echo $form->field($model, 'id_usr_alta') ?>

    <?php // echo $form->field($model, 'fecha_alta') ?>

    <?php // echo $form->field($model, 'id_usr_modif') ?>

    <?php // echo $form->field($model, 'fecha_modif') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
