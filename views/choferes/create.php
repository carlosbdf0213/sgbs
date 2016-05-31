<?php

use yii\helpers\Html;

use yii\helpers\ArrayHelper;

use yii\widgets\ActiveForm;

use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Choferes */

$this->title = 'Nuevo Chofer';
$this->params['breadcrumbs'][] = ['label' => 'Choferes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="choferes-update" style="padding-left: 20px;padding-right: 20px;"> 

	<section class="box box-primary ">

		<section class="box-header with-border"> 
		
			<h3 class="box-title"><span class="fa fa-chrome text-red"></span>   <?= Html::encode($this->title) ?> </i></h3>
			
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

							<?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

						</div>

					</div>

					<div class="row">

						<div class="col-lg-6">

							<?= $form->field($model, 'localidad')->textInput(['maxlength' => true]) ?>

						</div>


						<div class="col-lg-2">

							<?= $form->field($model, 'codigo_postal')->textInput(['maxlength' => true]) ?>

						</div>

						<div class="col-lg-4">

							<?php $itemsProvincias = ArrayHelper::map($provincias, 'id','descripcion'); ?>

							<?= $form->field($model, 'id_provincia')->dropDownList($itemsProvincias, ['prompt' => 'Seleccione ...']) ?>

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

						<div class="col-lg-6">

							<?= $form->field($model, 'web', ['template' => '
									{label}
									<div class="input-group">
									  <span class="input-group-addon">
										 <span class="fa fa-internet-explorer"></span>
									  </span>
									  {input}
									</div>
									{error}{hint}
							   '])->textInput(['maxlength' => true]) 
							?>
						</div>

					</div>      
					
					<div class="row">

						<div class="col-lg-4">

							<?php $itemsTipoDocImpositivo = ArrayHelper::map($tipodocimpositivo, 'id','descripcion'); ?>

							<?= $form->field($model, 'id_tipo_impositivo')->dropDownList($itemsTipoDocImpositivo, ['prompt' => 'Seleccione ...']) ?>

						</div>

						<div class="col-lg-4">

							<?= $form->field($model, 'documento_impositivo')->textInput() ?>

						</div>



						<div class="col-lg-4">

							<?php $itemsTipoResponsable = ArrayHelper::map($tiporesponsable, 'id','descripcion'); ?>

							<?= $form->field($model, 'id_tipo_responsable')->dropDownList($itemsTipoResponsable, ['prompt' => 'Seleccione ...']) ?>

						</div>


					</div> 				
 					<div class="row">

						<div class="col-lg-4">

							<?php echo $form->field($model, 'fecha_ing')->widget(
							
									DatePicker::className(), [
										'model' => $model,
										'attribute' => 'fecha_ing',

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
						
							<?php echo $form->field($model, 'fecha_baja')->widget(
							
									DatePicker::className(), [
										'model' => $model,
										'attribute' => 'fecha_baja',
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
		
</section><!-- /.parametros-update -->



    



