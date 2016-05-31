<?php

use yii\helpers\Html;

use yii\helpers\ArrayHelper;

use yii\widgets\ActiveForm;

use kartik\widgets\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Agenda */

$this->title = 'Ver Evento';
$this->params['breadcrumbs'][] = ['label' => 'Agenda', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-lg-8"> 

	<div class="box box-primary ">

		<div class="box-header with-border"> 	
		
			<h3 class="box-title"><span class="fa fa-calendar"></span>   <?= Html::encode($this->title) ?></i></h3>
			
			<div class="box-tools pull-right">
			
			<?= Html::a('', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-sm fa fa-edit','title' => 'Editar']) ?>
								
			<?= Html::a('', ['delete', 'id' => $model->id], [
					
					'class' => 'btn btn-danger btn-sm fa fa-trash',
							
					'data' => [
							
						'confirm' => 'Está seguro de querer borrar este item?',
								
					'method' => 'post',
							
					],
					'title' => 'Borrar'
							
			]) ?>

			<button class="btn btn-primary btn-sm" data-widget="remove"  title="Cerrar"><i class="fa fa-times"></i></button>
				
			</div><!-- /.box-tools -->
			
		</div><!-- /.box-header -->		
		
		<div class="box-body">
		
        <?php $form = ActiveForm::begin(); ?>

					<div class="row">

						<div class="col-lg-4">

							<?= $form->field($model, 'prioridad')->dropDownList([ 'Alta' => 'Alta', 'Normal' => 'Normal','Baja' => 'Baja', ], ['disabled' => 'disabled']) ?>

						</div>

					</div>

					<div class="row">

						<div class="col-lg-12">

							<?= $form->field($model, 'descripcion')->textInput(['readonly' => true]) ?>

						</div>

					</div>

					<div class="row">

						<div class="col-lg-6">
						

							<?php echo $form->field($model, 'inicio')->widget(
							
									DateTimePicker::className(), [
										'model' => $model,
										'attribute' => 'inicio',
										'disabled' => true,
										'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
										'options' => ['placeholder' => 'Seleccione ...'],
										'pluginOptions' => [
											'autoclose' => true,
											'format' => 'dd/mm/yyyy H:i',
											'startDate' => '01-Mar-2015 12:00 AM',
										]
									])
							?>

							
												
						</div>
					
						<div class="col-lg-6">
						
							<?php echo $form->field($model, 'fin')->widget(
							
									DateTimePicker::className(), [
										'model' => $model,
										'attribute' => 'fin',
										'disabled' => true,
										'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
										'options' => ['placeholder' => 'Seleccione ...'],
										'pluginOptions' => [
											'autoclose' => true,
											'format' => 'dd/mm/yyyy H:i',
											'startDate' => '01-Mar-2015 12:00 AM',
										]
									])
								
							?>
												
						</div>

					</div> 
										

            <?php ActiveForm::end(); ?>
			
			<div class="box-body">
			
			</div>
			
		</div><!-- /.box-body -->			
		
		<div class="box-footer">
		
			<small><b><i><?= Html::encode($this->title) ?></i></i></b> </small>
			
		</div><!-- /.box-footer -->
		
	</div><!-- /.box -->
			
</div><!-- /.col-lg-6 -->



