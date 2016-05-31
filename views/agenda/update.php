<?php

use yii\helpers\Html;

use yii\helpers\ArrayHelper;

use yii\widgets\ActiveForm;

use kartik\widgets\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Agenda */

$this->title = 'Editar Evento';
$this->params['breadcrumbs'][] = ['label' => 'Agenda', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<section class="col-lg-8"> 

	<section class="box box-primary ">

		<section class="box-header with-border"> 
		
			<h3 class="box-title"><span class="fa fa-calendar"></span>   <?= Html::encode($this->title) ?></i></h3>
			
			<div class="box-tools pull-right">
			
				<button class="btn btn-primary btn-sm" data-widget="remove"  title="Cerrar"><i class="fa fa-times"></i></button>
				
			</div><!-- /.box-tools -->
			
		</section><!-- /.box-header -->

		<section class="content">

			<div class="box-body with-border">

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

														
							<?php echo $form->field($model, 'inicio')->widget(
							
									DateTimePicker::className(), [
										'model' => $model,
										'attribute' => 'inicio',
										'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
										'options' => ['placeholder' => 'Seleccione ...'],
										'pluginOptions' => [
											'autoclose' => true,
											'format' => 'yyyy-mm-dd hh:ii',
											'startDate' => '01-01-2015 12:00 AM',

										]
									])
								
							?>

												
						</div>
					
						<div class="col-lg-6">
						
							<?php echo $form->field($model, 'fin')->widget(
							
									DateTimePicker::className(), [
										'model' => $model,
										'attribute' => 'fin',
										'type'=>DateTimePicker::TYPE_COMPONENT_PREPEND,
										'options' => ['placeholder' => 'Seleccione ...'],
										'pluginOptions' => [
											'autoclose' => true,
											'format' => 'yyyy-mm-dd hh:ii',
											'startDate' => '01-01-2015 12:00',
										]
									])
								
							?>
												
						</div>

					</div> 					
				

				<div class="form-group">

					<?= Html::submitButton($model->isNewRecord ? 'Agregar' : 'Actualizar', ['class' => 'btn btn-primary']) ?>

				</div>     

				<?php ActiveForm::end(); ?>
			
			</div><!-- /.box-body -->			
			
		</section><!-- /.content -->
		
		<section class="box-footer">
		
			<small><b><i><?= Html::encode($this->title) ?></i></b> </small>
			
		</section><!-- /.box-footer -->
		
	</section><!-- /.box -->
	
		
</section><!-- /.col-lg-8 -->



