<?php

use yii\helpers\Html;

use yii\helpers\ArrayHelper;

use yii\widgets\ActiveForm;

use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Camiones */

$this->title = 'Nuevo Camión';
$this->params['breadcrumbs'][] = ['label' => 'Camiones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="camiones-create" style="padding-left: 20px;padding-right: 20px;"> 

	<section class="box box-primary ">

		<section class="box-header with-border"> 
		
			<h3 class="box-title"><span class="fa fa-truck text-aqua"></span>   <?= Html::encode($this->title) ?> </h3>
			
			<div class="box-tools pull-right">
			
				<button class="btn btn-primary btn-sm" data-widget="remove"  title="Cerrar"><i class="fa fa-times"></i></button>
				
			</div><!-- /.box-tools -->
			
		</section><!-- /.box-header -->

		<section class="content">

			<div class="box-body with-border">

				<?php $form = ActiveForm::begin(); ?>
					<div class="row">				
					
						<div class="col-sm-6">

							<?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

						</div>				
					
						
					</div>
			
					<div class="row" >						
						<div class="col-sm-6">

							<?php $itemsChoferes = ArrayHelper::map($choferes, 'id','denominacion'); ?>

							<?= $form->field($model, 'id_chofer')->dropDownList($itemsChoferes, ['prompt' => 'Seleccione ...']) ?>
							
						</div>
						
						<?php if(isset($model->id_chofer)) { ?>
							<div class="col-sm-3">

								<?= $form->field($model->chofer, 'telefono', ['template' => '
										{label}
										<div class="input-group">
										  <span class="input-group-addon">
											 <span class="fa fa-tty"></span>
										  </span>
										  {input}
										</div>
										{error}{hint}
								   '])->textInput(['readonly' => true]) 
								?>

							</div>     
							
							<div class="col-sm-3">

								<?= $form->field($model->chofer, 'celular', ['template' => '
										{label}
										<div class="input-group">
										  <span class="input-group-addon">
											 <span class="fa fa-mobile"></span>
										  </span>
										  {input}
										</div>
										{error}{hint}
								   '])->textInput(['readonly' => true]) 
								?>

							</div>  	
						<?php }; ?>
						
					</div>

					
					<div class="row">				
					
						<div class="col-sm-4">

							<?= $form->field($model, 'patente')->textInput(['maxlength' => true]) ?>

						</div>
									
					
						<div class="col-sm-4">

							<?= $form->field($model, 'marca')->textInput(['maxlength' => true]) ?>

						</div>
						
						<div class="col-sm-4">

							<?= $form->field($model, 'modelo')->textInput(['maxlength' => true]) ?>

						</div>
						
					</div>
					<div class="row">				
					
						<div class="col-sm-8">

							<?= $form->field($model, 'tipo')->textInput(['maxlength' => true]) ?>

						</div>
			
					
						<div class="col-sm-2">

							<?= $form->field($model, 'anio_fabric')->textInput(['maxlength' => true]) ?>

						</div>
		
					
						<div class="col-sm-2">

							<?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

						</div>
						
					</div>
					<div class="row">				
					
						<div class="col-sm-6">

							<?= $form->field($model, 'nro_chasis')->textInput(['maxlength' => true]) ?>

						</div>				
					
						<div class="col-sm-6">

							<?= $form->field($model, 'nro_motor')->textInput(['maxlength' => true]) ?>

						</div>
						
					</div>

					<div class="row">				
					
						<div class="col-sm-4">

							<?php echo $form->field($model, 'fecha_patente')->widget(
							
									DatePicker::className(), [
										'model' => $model,
										'attribute' => 'fecha_patente',
										'disabled' => false,
										'type' => DatePicker::TYPE_COMPONENT_PREPEND,
										'options' => ['placeholder' => 'Seleccione ...'],
										'pluginOptions' => [
											'autoclose' => true,
											'format' => 'dd/mm/yyyy',

										]
									])
								
							?>
						</div>
									
					
						<div class="col-sm-2">

							<?= $form->field($model, 'ejes')->textInput(['maxlength' => true]) ?>

						</div>
						
				
					
						<div class="col-sm-3">

							<?= $form->field($model, 'tara')->textInput(['maxlength' => true]) ?>

						</div>
						
			
					
						<div class="col-sm-3">

							<?= $form->field($model, 'carga_util')->textInput(['maxlength' => true]) ?>

						</div>
						
					</div>
					<div class="row">				
					
						<div class="col-sm-4">

							<?php echo $form->field($model, 'fin_garantia')->widget(
							
									DatePicker::className(), [
										'model' => $model,
										'attribute' => 'fin_garantia',
										'disabled' => false,
										'type' => DatePicker::TYPE_COMPONENT_PREPEND,
										'options' => ['placeholder' => 'Seleccione ...'],
										'pluginOptions' => [
											'autoclose' => true,
											'format' => 'dd/mm/yyyy',

										]
									])
								
							?>
						</div>
									
					
						<div class="col-sm-4">

							<?php echo $form->field($model, 'fecha_itv')->widget(
							
									DatePicker::className(), [
										'model' => $model,
										'attribute' => 'fecha_itv',
										'disabled' => false,
										'type' => DatePicker::TYPE_COMPONENT_PREPEND,
										'options' => ['placeholder' => 'Seleccione ...'],
										'pluginOptions' => [
											'autoclose' => true,
											'format' => 'dd/mm/yyyy',

										]
									])
								
							?>
						</div>
										
					
						<div class="col-sm-4">

							<?php echo $form->field($model, 'fecha_ult_revision')->widget(
							
									DatePicker::className(), [
										'model' => $model,
										'attribute' => 'fecha_ult_revision',
										'disabled' => false,
										'type' => DatePicker::TYPE_COMPONENT_PREPEND,
										'options' => ['placeholder' => 'Seleccione ...'],
										'pluginOptions' => [
											'autoclose' => true,
											'format' => 'dd/mm/yyyy',

										]
									])
								
							?>
						</div>
						
					</div>
					<div class="row">				
					
						<div class="col-sm-2">

							<?= $form->field($model, 'kms_ult_revision')->textInput(['maxlength' => true]) ?>

						</div>			
					
						<div class="col-sm-10">

							<?php $itemsTipomanten = ArrayHelper::map($tipomanten, 'id','descripcion'); ?>

							<?= $form->field($model, 'id_tipo_ult_manten')->dropDownList($itemsTipomanten, ['prompt' => 'Seleccione ...']) ?>

						</div>
						
					</div>
					
					<div class="row">				
					
						<div class="col-sm-12">

							<?php $itemsPolizas = ArrayHelper::map($polizas, 'id','cia'); ?>

							<?= $form->field($model, 'id_poliza')->dropDownList($itemsPolizas, ['prompt' => 'Seleccione ...']) ?>

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
		
</section><!-- /camiones-create -->