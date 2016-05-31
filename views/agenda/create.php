<?php

use yii\helpers\Html;

use yii\helpers\ArrayHelper;

use yii\widgets\ActiveForm;

use kartik\widgets\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Agenda */

$this->title = 'Nuevo Evento';
$this->params['breadcrumbs'][] = ['label' => 'Agenda', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-lg-8"> 

	<div class="box box-primary ">

		<div class="box-header with-border"> 
		
			<h3 class="box-title"><span class="fa fa-calendar"></span>   <?= Html::encode($this->title) ?></i></h3>
			
			<div class="box-tools pull-right">
			
				<button class="btn btn-primary btn-sm" data-widget="remove"  title="Cerrar"><i class="fa fa-times"></i></button>
				
			</div><!-- /.box-tools -->
			
		</div><!-- /.box-header -->
		
		<!-- Main content -->

		<div class="content">

			<div class="box-body with-border">
			
				<div class="box-header">

					<?php $form = ActiveForm::begin(); ?>

					<div class="row">

						<div class="col-lg-4">

							<?= $form->field($model, 'prioridad')->dropDownList([ 'Alta' => 'Alta', 'Normal' => 'Normal','Baja' => 'Baja', ], ['prompt' => 'Seleccione ...']) ?>

						</div>

						</div>

					<div class="row">

						<div class="col-lg-12">

							<?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

						</div>

					</div>
   
					
					<div class="row">

						<div class="col-lg-6">
						
							<?= $form->field($model, 'inicio')->widget(
							
									DateTimePicker::className(), [
										'model' => $model,
										'attribute' => 'inicio',
										'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
										'options' => ['placeholder' => 'Seleccione Fecha ...'],
										'pluginOptions' => [
											'autoclose' => true,
											'format' => 'yyyy-mm-dd hh:ii',
											'startDate' => '01-01-2015 12:00 AM',										]
									])
								
							?>
												
						</div>
					
						<div class="col-lg-6">
						
							<?= $form->field($model, 'fin')->widget(
							
									DateTimePicker::className(), [
										'model' => $model,
										'attribute' => 'fin',
										'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
										'options' => ['placeholder' => 'Seleccione Fecha ...'],
										'pluginOptions' => [
											'autoclose' => true,
											'format' => 'yyyy-mm-dd hh:ii',
											'startDate' => '01-01-2015 12:00 AM',										]
									])
							?>
												
						</div>

					</div> 
										

					<div class="form-group">

						<?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?>

					</div>

					<?php ActiveForm::end(); ?>
			
			</div><!-- /.box-body -->			
			
		</div><!-- /.content -->

		</div><!-- /.content -->
		
		<div class="box-footer">
		
			<small><b><i> <?= Html::encode($this->title) ?></i></b> </small>
			
		</div><!-- /.box-footer -->
		
	</div><!-- /.box -->
	
		
</div><!-- /.col-lg-8 -->

