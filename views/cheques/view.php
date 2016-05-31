<?php

use yii\helpers\Html;

use yii\helpers\ArrayHelper;

use yii\widgets\ActiveForm;

use kartik\widgets\DatePicker;

use kartik\widgets\SwitchInput;

/* @var $this yii\web\View */
/* @var $model app\models\Cheques */

$this->title  = 'Ver Datos del Cheque '. (($model->propios == '1') ? 'Propio' : ' de Terceros');
$this->params['breadcrumbs'][] = ['label' => 'Cheques', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="cajas-update" style="padding-left: 20px;padding-right: 20px;"> 

	<section class="box box-primary ">

		<section class="box-header with-border"> 
		
			<?php if ($model->propios == '1'){ ?>

				<h3 class="box-title"><span class="fa fa-exclamation-triangle text-red"></span>   <?= Html::encode($this->title) ?> </i></h3>

					
			<?php  } else { ?>
					
				<h3 class="box-title"><span class="fa fa-exclamation-circle text-green"> </span>   <?= Html::encode($this->title) ?> </i></h3>
					
			<?php  };  ?>				

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
			
		</section><!-- /.box-header -->

		<section class="content">

			<div class="box-body with-border">

				<?php $form = ActiveForm::begin(); ?>

					<div class="row">				
					
						<div class="col-lg-2">
						
							<?= $form->field($model, 'propios')->widget(SwitchInput::classname(), 
								[     
									'disabled' => true,
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
										'disabled' => true,										
										'type' => DatePicker::TYPE_COMPONENT_PREPEND,
										'options' => ['placeholder' => 'Seleccione ...'],
										'pluginOptions' => [
											'autoclose' => true,
											'format' => 'dd/mm/yyyy',

										]
									])
								
							?>
							
						</div>

						<div class="col-lg-6">
						
							<?php if ($model->propios == '1'){ ?>

								<?php $itemsProveedores = ArrayHelper::map($proveedores, 'id','denominacion'); ?>

								<?= $form->field($model, 'id_proveedor')->dropDownList($itemsProveedores, ['disabled' => 'disabled']) ?>
					
							<?php  } else { ?>
					
								<?php $itemsClientes = ArrayHelper::map($clientes, 'id','denominacion'); ?>

								<?= $form->field($model, 'id_cliente')->dropDownList($itemsClientes, ['disabled' => 'disabled']) ?>
					
							<?php  };  ?>	
						</div>

					</div>  					
 					<div class="row">
					
						<div class="col-lg-6">

							<?php $itemsCajas = ArrayHelper::map($cajas, 'id','descripcion'); ?>

							<?= $form->field($model, 'id_caja')->dropDownList($itemsCajas, ['disabled' => 'disabled']) ?>

						</div>
						

						<div class="col-lg-6">

							<?php $itemsBancos = ArrayHelper::map($bancos, 'id','descomp'); ?>

							<?= $form->field($model, 'id_banco')->dropDownList($itemsBancos, ['disabled' => 'disabled']) ?>							
						</div>
						
					</div>
 					<div class="row">

						<div class="col-lg-4">

							<?= $form->field($model, 'numero')->textInput(['readonly' => true]) ?>
							
						</div>

						<div class="col-lg-4">

							<?= $form->field($model, 'estado')->dropDownList([ 'Cartera' => 'Cartera', 'Depositado' => 'Depositado', 'Rechazado' => 'Rechazado', 'Entregado' => 'Entregado', 'Reemplazado' => 'Reemplazado', ], ['disabled' => 'disabled']) ?>

						</div>


						<div class="col-lg-4">

							<?= $form->field($model, 'cuit')->textInput(['readonly' => true]) ?>
						</div>
						
					</div>
					
 					<div class="row">

						<div class="col-lg-4">

							<?php echo $form->field($model, 'fecha_venc')->widget(
							
									DatePicker::className(), [
										'model' => $model,
										'attribute' => 'fecha_venc',
										'disabled' => true,
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
										'disabled' => true,
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
									'disabled' => true,								
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

							<?= $form->field($model, 'clearing')->dropDownList([ 24 => '24', 48 => '48', 72 => '72', ], ['disabled' => 'disabled']) ?>

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
							   '])->textInput(['readonly' => true])  
							?>	
							
						</div>
					
					</div>
					


					<div class="row">

						<div class="col-lg-12">
						
							<?= $form->field($model, 'observaciones')->textarea(['readonly' => true]) ?>					

						</div>

					</div>  
		 

				<?php ActiveForm::end(); ?>
			
			</div><!-- /.box-body -->			
			
		</section><!-- /.content -->
		
		<section class="box-footer">
		
			<small><b><i><?= Html::encode($this->title) ?> </i></b> </small>
			
		</section><!-- /.box-footer -->
		
	</section><!-- /.box -->
		
</section><!-- /.parametros-update -->



    



