<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-lg-10" style="padding-top: 20px"> 

	<div class="box box-primary" >       

		<div class="box-header with-border"> 
		
			<span class="glyphicon glyphicon-log-in"> <?= Html::encode($this->title) ?></span>

			<div class="box-tools pull-right">
		
				<button class="btn btn-primary btn-sm" data-widget="remove"  title="Cerrar"><i class="fa fa-times"></i></button>
				
			</div><!-- /.box-tools -->
				
		</div><!-- /.box-header -->
		
		<div class="raw" style="padding-top: 20px;padding-left: 30px; padding-bottom: 20px">
			<p>Por favor complete los siguientes campos para acceder:</p>
		</div>
		
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "\n{label}\n<div class=\"col-lg-6\">\n{input}</div>\n<div class=\"col-lg-8\">\n{error}</div>",
            'labelOptions' => ['class' => 'col-lg-2 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'username', ['template' => ' 
											{label}
											<div class="col-lg-4">
									<div class="input-group">
									  <span class="input-group-addon">
										 <span class="fa fa-user"></span>
									  </span>
									  {input}
									</div>
									</div>
									{error}{hint}
							   '])->textInput(['maxlength' => true]) 
		?>

        <?= $form->field($model, 'password', ['template' => ' 
											{label}
											<div class="col-lg-4">
									<div class="input-group">
									  <span class="input-group-addon">
										 <span class="fa fa-lock"></span>
									  </span>
									  {input}
									  </div>
									</div>
									{error}{hint}
							   '])->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group" style="padding-bottom: 20px">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Acceder', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

</div>
</div>

