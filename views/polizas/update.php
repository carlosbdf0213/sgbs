<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Polizas */

$this->title = 'Actualizar datos de la Póliza ';
$this->params['breadcrumbs'][] = ['label' => 'Polizas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>


<section class="polizas-update" style="padding-left: 20px;padding-right: 20px;"> 

	<section class="box box-primary ">

		<section class="box-header with-border"> 
		
			<h3 class="box-title"><span class="fa fa-pinterest-square text-blue"></span>   <?= Html::encode($this->title) ?> </i></h3>
			
			<div class="box-tools pull-right">

			<button class="btn btn-primary btn-sm" data-widget="remove"  title="Cerrar"><i class="fa fa-times"></i></button>
				
			</div><!-- /.box-tools -->
			
		</section><!-- /.box-header -->

		<section class="content">

			<div class="box-body with-border">

				<?php $form = ActiveForm::begin(); ?>

					<div class="row">
					
						<div class="col-lg-6">

							<?= $form->field($model, 'cia')->textInput(['maxlength' => true]) ?>

						</div>
					
						<div class="col-lg-6">

							<?= $form->field($model, 'contacto')->textInput(['maxlength' => true]) ?>

						</div>
						
					</div>
					
					<div class="row">

						<div class="col-lg-4">

							<?= $form->field($model, 'telefono', ['template' => '
									{label}
									<div class="input-group">
									  <span class="input-group-addon">
										 <span class="fa fa-tty"></span>
									  </span>
									  {input}
									</div>
									{error}{hint}
							   '])->textInput(['maxlength' => true])   
							?>

						</div>        
 						<div class="col-lg-4">

							<?= $form->field($model, 'celular', ['template' => '
									{label}
									<div class="input-group">
									  <span class="input-group-addon">
										 <span class="fa fa-mobile"></span>
									  </span>
									  {input}
									</div>
									{error}{hint}
							   '])->textInput(['maxlength' => true])  
							?>

						</div>         
						<div class="col-lg-4">

							<?= $form->field($model, 'fax', ['template' => '
									{label}
									<div class="input-group">
									  <span class="input-group-addon">
										 <span class="fa fa-fax"></span>
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

							<?= $form->field($model, 'email', ['template' => '
									{label}
									<div class="input-group">
									  <span class="input-group-addon">
										 <span class="fa fa-envelope"></span>
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
						
							<?= $form->field($model, 'cobertura')->textarea(['rows' => 4]) ?>					

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
		
</section><!-- /.polizas-update -->


