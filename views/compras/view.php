<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use kartik\widgets\SwitchInput;

/* @var $this yii\web\View */
/* @var $model app\models\Compras */

$this->title = 'Ver Datos del Comprobante';
$this->params['breadcrumbs'][] = ['label' => 'Compras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="compras-view" style="padding-left: 20px;padding-right: 20px;"> 

	<section class="box box-primary ">

		<section class="box-header with-border"> 
		
			<h3 class="box-title"><span class="fa fa fa-creative-commons text-aqua"></span>   <?= Html::encode($this->title) ?> </i></h3>
			
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
						
							<?= $form->field($model, 'mes_fiscal')->textInput(['readonly' => true]) ?>
							
						</div>		
						
					
						<div class="col-lg-2">
						
							<?= $form->field($model, 'anio_fiscal')->textInput(['readonly' => true]) ?>	

							
						</div>		
						
						<div class="col-lg-6">	

								<?php $itemsProveedores = ArrayHelper::map($proveedores, 'id','denominacion'); ?>

								<?= $form->field($model, 'id_proveedor')->dropDownList($itemsProveedores, ['disabled' => 'disabled']) ?>
					
						</div>		
						
					</div>
					
					<div class="row">
					
						<div class="col-lg-6">	

								<?php $itemsTipocomprobante = ArrayHelper::map($tipocomprobante, 'id','descripcion'); ?>

								<?= $form->field($model, 'id_tipo_comprobante')->dropDownList($itemsTipocomprobante, ['disabled' => 'disabled']) ?>
					
						</div>		
						

						<div class="col-lg-1">

							<?= $form->field($model, 'letra')->textInput(['readonly' => true]) ?>
							
						</div>
						<div class="col-lg-1">

							<?= $form->field($model, 'sucursal')->textInput(['readonly' => true]) ?>
							
						</div>
						
						<div class="col-lg-4">

							<?= $form->field($model, 'nro_comprobante')->textInput(['readonly' => true]) ?>
							
						</div>

						
					</div>					
					<div class="row">					
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
						
								<?php $itemsDestinos = ArrayHelper::map($destinos, 'id','descripcion'); ?>

								<?= $form->field($model, 'id_destino')->dropDownList($itemsDestinos, ['disabled' => 'disabled']) ?>
					
						</div>

					</div>  					
 					<div class="row">	
					
						<div class="col-lg-12">

							<?= $form->field($model, 'detalle')->textInput(['readonly' => true]) ?>
					
						</div>
						
					</div>
					
 					<div class="row">
							
						<div class="col-lg-2">
	
							<?= $form->field($model, 'neto_gravado', ['template' => '
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
							
						<div class="col-lg-2">

							<?= $form->field($model, 'percepcion', ['template' => '
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
						
						<div class="col-lg-2">
						
							<?= $form->field($model, 'imp_internos', ['template' => '
									{label}
									<div class="input-group" style="text: align-right;">
									  <span class="input-group-addon">
										 <span class="fa fa-usd"></span>
									  </span>
									  {input}
									</div>
									{error}{hint}
							   '])->textInput(['readonly' => true]) 
							?>	
							
						</div>
							
						<div class="col-lg-2">

							<?= $form->field($model, 'tasa_1_iva', ['template' => '
									{label}
									<div class="input-group" style="text: align-right;">
									  <span class="input-group-addon">
										 <span class="fa">%</span>
									  </span>
									  {input}
									</div>
									{error}{hint}
							   '])->textInput(['readonly' => true]) 
							?>								
						</div>				
						
						<div class="col-lg-2">

							<?= $form->field($model, 'importe_1_iva', ['template' => '
									{label}
									<div class="input-group" style="text: align-right;">
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
							
						<div class="col-lg-2">		
						
							<?= $form->field($model, 'no_gravado', ['template' => '
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
							
						<div class="col-lg-2">

							<?= $form->field($model, 'perc_iva', ['template' => '
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

						<div class="col-lg-2">

							<?= $form->field($model, 'imp_municipales', ['template' => '
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
						
						<div class="col-lg-2">
					
							<?= $form->field($model, 'tasa_2_iva', ['template' => '
									{label}
									<div class="input-group" style="text: align-right;">
									  <span class="input-group-addon">
										 <span class="fa">%</span>
									  </span>
									  {input}
									</div>
									{error}{hint}
							   '])->textInput(['readonly' => true]) 
							?>								

						</div>	
						
						<div class="col-lg-2">
						
							<?= $form->field($model, 'importe_2_iva', ['template' => '
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
						<div class="col-lg-2">
						</div>
						<div class="col-lg-2">

							<?= $form->field($model, 'perc_dgr', ['template' => '
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
						<div class="col-lg-2">
						
							<?= $form->field($model, 'imp_provinciales', ['template' => '
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
						<div class="col-lg-2">

							<?= $form->field($model, 'tasa_3_iva', ['template' => '
									{label}
									<div class="input-group" style="text: align-right;">
									  <span class="input-group-addon">
										 <span class="fa">%</span>
									  </span>
									  {input}
									</div>
									{error}{hint}
							   '])->textInput(['readonly' => true]) 
							?>								
					
						</div>				
						<div class="col-lg-2">

							<?= $form->field($model, 'importe_3_iva', ['template' => '
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
						<div class="col-lg-2">
						</div>
						<div class="col-lg-2">
						</div>
						<div class="col-lg-2">
						
							<?= $form->field($model, 'imp_nacionales', ['template' => '
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
							
						<div class="col-lg-2">

							<?= $form->field($model, 'tasa_4_iva', ['template' => '
									{label}
									<div class="input-group" style="text: align-right;">
									  <span class="input-group-addon">
										 <span class="fa">%</span>
									  </span>
									  {input}
									</div>
									{error}{hint}
							   '])->textInput(['readonly' => true]) 
							?>								
					
						</div>	
						
						<div class="col-lg-2">

							<?= $form->field($model, 'importe_4_iva', ['template' => '
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
						<div class="col-lg-2">
						</div>
						<div class="col-lg-2">
						</div>
						<div class="col-lg-2">
						</div>
						<div class="col-lg-2">

							<?= $form->field($model, 'tasa_5_iva', ['template' => '
									{label}
									<div class="input-group" style="text: align-right;">
									  <span class="input-group-addon">
										 <span class="fa">%</span>
									  </span>
									  {input}
									</div>
									{error}{hint}
							   '])->textInput(['readonly' => true]) 
							?>								
					
						</div>				
						<div class="col-lg-2">


							<?= $form->field($model, 'importe_5_iva', ['template' => '
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
					
						<div class="col-lg-2">
	
							<?= $form->field($model, 'total', ['template' => '
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

				<?php ActiveForm::end(); ?>
			
			</div><!-- /.box-body -->			
			
		</section><!-- /.content -->
		
		<section class="box-footer">
		
			<small><b><i><?= Html::encode($this->title) ?> </i></b> </small>
			
		</section><!-- /.box-footer -->
		
	</section><!-- /.box -->
		
</section><!-- /.compras-view -->