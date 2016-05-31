<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Agenda */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="agenda-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipo')->dropDownList([ 'Evento' => 'Evento', 'Tarea' => 'Tarea', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'categoria')->dropDownList([ 'Privado' => 'Privado', 'PÃºblico' => 'PÃºblico', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'prioridad')->dropDownList([ 'Alta' => 'Alta', 'Normal' => 'Normal', 'Baja' => 'Baja', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_usuario')->textInput() ?>

    <?= $form->field($model, 'fecha')->widget(\yii\jui\DatePicker::classname(), [
                                                'language' => 'es',
                                                'dateFormat' => 'dd/MM/yyyy',
                                            ]) ?>

    <?= $form->field($model, 'hora')->textInput() ?>

    <?= $form->field($model, 'duracion')->textInput() ?>

    <?= $form->field($model, 'todo_dia')->dropDownList([ 'Si' => 'Si', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'asunto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lugar')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'aviso')->dropDownList([ 'Ninguno' => 'Ninguno', '0 Min' => '0 Min', '5 min' => '5 min', '10 min' => '10 min', '15 min' => '15 min', '30 min' => '30 min', '1 hora' => '1 hora', '2 hs' => '2 hs', '4 hs' => '4 hs', '6 hs' => '6 hs', '1 dÃ­a' => '1 dÃ­a', '2 dÃ­as' => '2 dÃ­as', '4 dÃ­as' => '4 dÃ­as', '5 dÃ­as' => '5 dÃ­as', '1 semana' => '1 semana', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'aviso_mail')->dropDownList([ 'Si' => 'Si', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'observaciones')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_usr_alta')->textInput() ?>

    <?= $form->field($model, 'fecha_alta')->textInput() ?>

    <?= $form->field($model, 'id_usr_modif')->textInput() ?>

    <?= $form->field($model, 'fecha_modif')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
