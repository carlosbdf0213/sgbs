<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Combustibles */

$this->title = 'Combustibles';
$this->params['breadcrumbs'][] = ['label' => 'Combustibles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="cajas-view" style="padding-left: 20px;padding-right: 20px;"> 

	<section class="box box-primary ">

		<section class="box-header with-border"> 
		
			<h3 class="box-title"><span class="glyphicon glyphicon-tint text-blue"></span>   <?= Html::encode($this->title) ?> </i></h3>
			
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

							<?php $itemsCamiones = ArrayHelper::map($camiones, 'id','marca'); ?>

							<?= $form->field($model, 'id_camion')->dropDownList($itemsCamiones, ['disabled' => 'disabled']) ?>
							
						</div>

					</div>

					
					<div class="row">				
					
						<div class="col-sm-4">


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
									
					
						<div class="col-sm-4">

							<?= $form->field($model, 'litros')->textInput(['readonly' => true]) ?>

						</div>
						
						<div class="col-sm-4">

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
					
						<div class="col-sm-2">

							<?= $form->field($model, 'km_bitacora')->textInput(['readonly' => true]) ?>

						</div>
			
					
						<div class="col-sm-2">

							<?= $form->field($model, 'tn')->textInput(['readonly' => true]) ?>

						</div>
									
						<div class="col-sm-6">

							<?php $itemsProveedores = ArrayHelper::map($proveedores, 'id','denominacion'); ?>

							<?= $form->field($model, 'id_proveedor')->dropDownList($itemsProveedores, ['disabled' => 'disabled']) ?>
							
						</div>
						
					</div>

					<div class="row">				
														
						<div class="col-sm-2">

							<?= $form->field($model, 'recorrido')->textInput(['readonly' => true]) ?>

						</div>
						
				
					
						<div class="col-sm-3">

							<?= $form->field($model, 'consumo')->textInput(['readonly' => true]) ?>

						</div>
						
			
					
						<div class="col-sm-3">

							<?= $form->field($model, 'rendimiento')->textInput(['readonly' => true]) ?>

						</div>
						
					</div>

				<?php ActiveForm::end(); ?>
			
			</div><!-- /.box-body -->			
			
		</section><!-- /.content -->
		
		<section class="box-footer">
		
			<small><b><i><?= Html::encode($this->title) ?> </i></b> </small>
			
		</section><!-- /.box-footer -->
		
	</section><!-- /.box -->
		
</section><!-- /.combustibles-view -->
