<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Camiones */

$this->title = 'Ver Datos del Camión';
$this->params['breadcrumbs'][] = ['label' => 'Camiones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="cajas-view" style="padding-left: 20px;padding-right: 20px;"> 

	<section class="box box-primary ">

		<section class="box-header with-border"> 
		
			<h3 class="box-title"><span class="fa fa-truck text-aqua"></span>   <?= Html::encode($this->title) ?> </i></h3>
			
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

			
					<div class="row" >						
						<div class="col-sm-6">

							<?php $itemsChoferes = ArrayHelper::map($choferes, 'id','denominacion'); ?>

							<?= $form->field($model, 'id_chofer')->dropDownList($itemsChoferes, ['disabled' => 'disabled']) ?>
							
						</div>
						
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
					</div>

					
					<div class="row">				
					
						<div class="col-sm-4">

							<?= $form->field($model, 'patente')->textInput(['readonly' => true]) ?>

						</div>
									
					
						<div class="col-sm-4">

							<?= $form->field($model, 'marca')->textInput(['readonly' => true]) ?>

						</div>
						
						<div class="col-sm-4">

							<?= $form->field($model, 'modelo')->textInput(['readonly' => true]) ?>

						</div>
						
					</div>
					<div class="row">				
					
						<div class="col-sm-8">

							<?= $form->field($model, 'tipo')->textInput(['readonly' => true]) ?>

						</div>
			
					
						<div class="col-sm-2">

							<?= $form->field($model, 'anio_fabric')->textInput(['readonly' => true]) ?>

						</div>
		
					
						<div class="col-sm-2">

							<?= $form->field($model, 'color')->textInput(['readonly' => true]) ?>

						</div>
						
					</div>
					<div class="row">				
					
						<div class="col-sm-6">

							<?= $form->field($model, 'nro_chasis')->textInput(['readonly' => true]) ?>

						</div>				
					
						<div class="col-sm-6">

							<?= $form->field($model, 'nro_motor')->textInput(['readonly' => true]) ?>

						</div>
						
					</div>

					<div class="row">				
					
						<div class="col-sm-4">

							<?php echo $form->field($model, 'fecha_patente')->widget(
							
									DatePicker::className(), [
										'model' => $model,
										'attribute' => 'fecha_patente',
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
									
					
						<div class="col-sm-2">

							<?= $form->field($model, 'ejes')->textInput(['readonly' => true]) ?>

						</div>
						
				
					
						<div class="col-sm-3">

							<?= $form->field($model, 'tara')->textInput(['readonly' => true]) ?>

						</div>
						
			
					
						<div class="col-sm-3">

							<?= $form->field($model, 'carga_util')->textInput(['readonly' => true]) ?>

						</div>
						
					</div>
					<div class="row">				
					
						<div class="col-sm-4">

							<?php echo $form->field($model, 'fin_garantia')->widget(
							
									DatePicker::className(), [
										'model' => $model,
										'attribute' => 'fin_garantia',
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
									
					
						<div class="col-sm-4">

							<?php echo $form->field($model, 'fecha_itv')->widget(
							
									DatePicker::className(), [
										'model' => $model,
										'attribute' => 'fecha_itv',
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
										
					
						<div class="col-sm-4">

							<?php echo $form->field($model, 'fecha_ult_revision')->widget(
							
									DatePicker::className(), [
										'model' => $model,
										'attribute' => 'fecha_ult_revision',
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
						
					</div>
					<div class="row">				
					
						<div class="col-sm-2">

							<?= $form->field($model, 'kms_ult_revision')->textInput(['readonly' => true]) ?>

						</div>			
					
						<div class="col-sm-10">

							<?php $itemsTipomanten = ArrayHelper::map($tipomanten, 'id','descripcion'); ?>

							<?= $form->field($model, 'id_tipo_ult_manten')->dropDownList($itemsTipomanten, ['disabled' => 'disabled']) ?>

						</div>
						
					</div>
					
					<div class="row">				
					
						<div class="col-sm-12">

							<?php $itemsPolizas = ArrayHelper::map($polizas, 'id','cia'); ?>

							<?= $form->field($model, 'id_poliza')->dropDownList($itemsPolizas, ['disabled' => 'disabled']) ?>

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




    

    

    

    
   

   

    

    

    

    

    

    

    

    


