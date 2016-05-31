<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Multas */

$this->title = 'Actualizar Datos de la Multa ';
$this->params['breadcrumbs'][] = ['label' => 'Multas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<section class="multas-update" style="padding-left: 20px;padding-right: 20px;"> 

	<section class="box box-primary ">

		<section class="box-header with-border"> 
		
			<h3 class="box-title"><span class="fa fa-maxcdn text-red"></span>   <?= Html::encode($this->title) ?> </i></h3>
			
			<div class="box-tools pull-right">
			
				<button class="btn btn-primary btn-sm" data-widget="remove"  title="Cerrar"><i class="fa fa-times"></i></button>
				
			</div><!-- /.box-tools -->
			
		</section><!-- /.box-header -->


				<section class="content">

			<div class="box-body with-border">

				<?php $form = ActiveForm::begin(); ?>

					<div class="row">
					
						<div class="col-lg-6">

							<?php $itemsChoferes = ArrayHelper::map($choferes, 'id','denominacion'); ?>

							<?= $form->field($model, 'id_chofer')->dropDownList($itemsChoferes, ['prompt' => 'Seleccione ...']) ?>

						</div>
					
						<div class="col-lg-6">

							<?php echo $form->field($model, 'fecha')->widget(
							
									DatePicker::className(), [
										'model' => $model,
										'attribute' => 'fecha',
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
					
						<div class="col-lg-12">

							<?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

						</div>
						
					</div>
					
					<div class="row">

						<div class="col-lg-12">
						
							<?= $form->field($model, 'alegato')->textarea(['rows' => 4]) ?>				

						</div>

					</div>  
					<div class="row">

						<div class="col-lg-12">

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

						<div class="col-lg-6">

							<?php echo $form->field($model, 'fecha_pago')->widget(
							
									DatePicker::className(), [
										'model' => $model,
										'attribute' => 'fecha',
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


						<div class="col-lg-6">

							<?php echo $form->field($model, 'fecha_venc')->widget(
							
									DatePicker::className(), [
										'model' => $model,
										'attribute' => 'fecha',
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
		
</section><!-- /.multas-update -->

    
