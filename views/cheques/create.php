<?php

use yii\helpers\Html;

use yii\helpers\ArrayHelper;

use yii\widgets\ActiveForm;

use kartik\widgets\DatePicker;

use kartik\widgets\SwitchInput;

/* @var $this yii\web\View */
/* @var $model app\models\Cheques */

$this->title = 'Nuevo Cheque ' ;
$this->params['breadcrumbs'][] = ['label' => 'Cheques', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<section class="cajas-update" style="padding-left: 20px;padding-right: 20px;"> 

	<section class="box box-primary ">

		<section class="box-header with-border"> 
		
			<h3 class="box-title"><span class="fa fa-exclamation-triangle text-red"></span>   <?= Html::encode($this->title) ?> </i></h3>
			
			<div class="box-tools pull-right">
			
				<button class="btn btn-primary btn-sm" data-widget="remove"  title="Cerrar"><i class="fa fa-times"></i></button>
				
			</div><!-- /.box-tools -->
			
		</section><!-- /.box-header -->

		<section class="content">

			<div class="box-body with-border">

				<?php $form = ActiveForm::begin(); ?>

					<div class="row">				
						
						<div class="col-lg-2">
						
							<?= $form->field($model, 'propios')->widget(SwitchInput::classname(), 
								[     
									'disabled' => false,
									'pluginOptions' => [
													'onText' => 'Si',
													'offText' => 'No',
									]
								]) 
							?>
							
						</div>		
					
						<div class="col-lg-4">
						
							<?php echo $form->field($model, 'fecha')->widget(
							
									DatePicker::className(), [
										'model' => $model,
										'attribute' => 'fecha',
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
						<div class="col-lg-6">


								<?php $itemsProveedores = ArrayHelper::map($proveedores, 'id','denominacion'); ?>

								<?= $form->field($model, 'id_proveedor')->dropDownList($itemsProveedores, ['prompt' => 'Seleccione ...']) ?>

						</div>
						

						<div class="col-lg-6">					
								<?php $itemsClientes = ArrayHelper::map($clientes, 'id','denominacion'); ?>

								<?= $form->field($model, 'id_cliente')->dropDownList($itemsClientes, ['prompt' => 'Seleccione ...']) ?>
					

						</div>

					</div>  					
 					<div class="row">
					
						<div class="col-lg-6">

							<?php $itemsCajas = ArrayHelper::map($cajas, 'id','descripcion'); ?>

							<?= $form->field($model, 'id_caja')->dropDownList($itemsCajas, ['prompt' => 'Seleccione ...']) ?>

						</div>
						

						<div class="col-lg-6">

							<?php $itemsBancos = ArrayHelper::map($bancos, 'id','descomp'); ?>

							<?= $form->field($model, 'id_banco')->dropDownList($itemsBancos, ['prompt' => 'Seleccione ...']) ?>							
						</div>
						
					</div>
 					<div class="row">

						<div class="col-lg-4">

							<?= $form->field($model, 'numero')->textInput(['maxlength' => true]) ?>
							
						</div>

						<div class="col-lg-4">

							<?= $form->field($model, 'estado')->dropDownList([ 'Cartera' => 'Cartera', 'Depositado' => 'Depositado', 'Rechazado' => 'Rechazado', 'Entregado' => 'Entregado', 'Reemplazado' => 'Reemplazado', ], ['prompt' => '']) ?>

						</div>


						<div class="col-lg-4">

							<?= $form->field($model, 'cuit')->textInput(['maxlength' => true]) ?>
						</div>
						
					</div>
					
 					<div class="row">

						<div class="col-lg-4">

							<?php echo $form->field($model, 'fecha_venc')->widget(
							
									DatePicker::className(), [
										'model' => $model,
										'attribute' => 'fecha_venc',

										'type' => DatePicker::TYPE_COMPONENT_PREPEND,
										'options' => ['placeholder' => 'Seleccione ...'],
										'pluginOptions' => [
											'autoclose' => true,
											'format' => 'dd/mm/yyyy',

										]
									])
								
							?>
							
						</div>


						<div class="col-lg-4">
						
							<?php echo $form->field($model, 'fecha_cobro')->widget(
							
									DatePicker::className(), [
										'model' => $model,
										'attribute' => 'fecha_cobro',
										'type' => DatePicker::TYPE_COMPONENT_PREPEND,

										'options' => ['placeholder' => 'Seleccione ...'],
										'pluginOptions' => [
											'autoclose' => true,
											'format' => 'dd/mm/yyyy',

										]
									])
								
							?>
						</div>

						<div class="col-lg-4">
						
							<?= $form->field($model, 'conciliado')->widget(SwitchInput::classname(), 
								[    
									'pluginOptions' => [
													'onText' => 'Si',
													'offText' => 'No',
									]
								]) 
							?>
							
						</div>
				
					</div>
 					<div class="row">

						<div class="col-lg-6">

							<?= $form->field($model, 'clearing')->dropDownList([ 24 => '24', 48 => '48', 72 => '72', ], ['prompt' => 'Seleccione ...']) ?>

						</div>
									
					
						<div class="col-lg-6">

							<?= $form->field($model, 'importe', ['template' => '
									{label}
									<div class="input-group">
									  <span class="input-group-addon">
										 <span class="fa fa-usd"></span>
									  </span>
									  {input}
									</div>
									{error}{hint}
							   '])->textInput(['maxlength' => true])  
							?>	
					
						</div>
						
					</div>
					


					<div class="row">

						<div class="col-lg-12">
						
							<?= $form->field($model, 'observaciones')->textarea(['rows' => 4]) ?>					

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
		
</section><!-- /.parametros-update -->



    


