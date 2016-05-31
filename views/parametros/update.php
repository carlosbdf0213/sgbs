<?php

use yii\helpers\Html;

use yii\helpers\ArrayHelper;

use yii\widgets\ActiveForm;

use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Parametros */

$this->title = 'Actualizar Parámetros del Sistema';
$this->params['breadcrumbs'][] = ['label' => 'Parametros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<section class="parametros-update" style="padding-left: 20px;padding-right: 20px;"> 

	<section class="box box-primary ">

		<section class="box-header with-border"> 
		
			<h3 class="box-title"><span class="fa fa-gears text-orange"></span>   <?= Html::encode($this->title) ?> </i></h3>
			
			<div class="box-tools pull-right">
			
				<button class="btn btn-primary btn-sm" data-widget="remove"  title="Cerrar"><i class="fa fa-times"></i></button>
				
			</div><!-- /.box-tools -->
			
		</section><!-- /.box-header -->

		<section class="content">

			<div class="box-body with-border">

				<?php $form = ActiveForm::begin(); ?>

					<div class="row">

						<div class="col-lg-12">

							<?= $form->field($model, 'denominacion')->textInput(['maxlength' => true]) ?>

						</div>

					</div>

					<div class="row">

						<div class="col-lg-12">

							<?= $form->field($model, 'domicilio')->textInput(['maxlength' => true]) ?>

						</div>

					</div>
					<div class="row">

						<div class="col-lg-6">

							<?php $itemsProvincias = ArrayHelper::map($provincias, 'id','descripcion'); ?>

							<?= $form->field($model, 'id_provincia')->dropDownList($itemsProvincias, ['prompt' => 'Seleccione ...']) ?>

						</div>


						<div class="col-lg-6">
						
							<?= $form->field($model, 'fecha_inicio')->widget(
							
									DatePicker::className(), [
										'type' => DatePicker::TYPE_COMPONENT_PREPEND,
										'options' => ['placeholder' => 'Seleccione ...'],
										'pluginOptions' => [
											'autoclose' => true,
											'format' => 'dd/mm/yyyy',
										]
									]
								)
									
							?>
					
						</div>

					</div>  

					<div class="row">

						<div class="col-lg-6">					

							<?= $form->field($model, 'cuit')->textInput() ?>	
						
						</div>
					


						<div class="col-lg-6">					

							<?php $itemsTipoResponsable = ArrayHelper::map($tiporesponsable, 'id','descripcion'); ?>

							<?= $form->field($model, 'id_tipo_responsable')->dropDownList($itemsTipoResponsable) ?>
						
						</div>
					
					</div>
					<div class="row">

						<div class="col-lg-6">					

							<?= $form->field($model, 'nro_agente_retenc')->textInput() ?>
						
						</div>
					


						<div class="col-lg-6">					

							<?= $form->field($model, 'nro_establec')->textInput() ?>
						
						</div>
					
					</div>

					<div class="row">

						<div class="col-lg-12">					

							<?= $form->field($model, 'enc_linea1_izq')->textInput(['maxlength' => true]) ?>	
						
						</div>
					
					</div>

					<div class="row">

						<div class="col-lg-12">					

							<?= $form->field($model, 'enc_linea2_izq')->textInput(['maxlength' => true]) ?>	
						
						</div>
					
					</div>

					<div class="row">

						<div class="col-lg-12">					

							<?= $form->field($model, 'enc_linea3_izq')->textInput(['maxlength' => true]) ?>	
						
						</div>
					
					</div>
					
					<div class="row">

						<div class="col-lg-12">					

							<?= $form->field($model, 'enc_linea1_der')->textInput(['maxlength' => true]) ?>	
						
						</div>
					
					</div>
					
					<div class="row">

						<div class="col-lg-12">					

							<?= $form->field($model, 'enc_linea2_der')->textInput(['maxlength' => true]) ?>	
						
						</div>
					
					</div>
					
					<div class="row">

						<div class="col-lg-12">					

							<?= $form->field($model, 'enc_linea3_der')->textInput(['maxlength' => true]) ?>	
						
						</div>
					
					</div>				

				<div class="form-group">

					<?= Html::submitButton($model->isNewRecord ? 'Agregar' : 'Actualizar', ['class' => 'btn btn-primary']) ?>

				</div>     

				<?php ActiveForm::end(); ?>
			
			</div><!-- /.box-body -->			
			
		</section><!-- /.content -->
		
		<section class="box-footer">
		
			<small><b><i><?= Html::encode($this->title) ?> </i></b> </small>
			
		</section><!-- /.box-footer -->
		
	</section><!-- /.box -->
	
		
</section><!-- /.col-lg-8 -->

    






    

