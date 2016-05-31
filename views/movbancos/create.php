<?php

use yii\helpers\Html;

use yii\helpers\ArrayHelper;

use yii\widgets\ActiveForm;

use kartik\widgets\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Movbancos */

$this->title = 'Nuevo Movimiento Bancario';
$this->params['breadcrumbs'][] = ['label' => 'Movbancos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="movbancos-create" style="padding-left: 20px;padding-right: 20px;"> 

	<section class="box box-primary ">

		<section class="box-header with-border"> 
		
			<h3 class="box-title"><span class="fa fa-retweet text-aqua"></span>   <?= Html::encode($this->title) ?> </i></h3>
			
			<div class="box-tools pull-right">

			<button class="btn btn-primary btn-sm" data-widget="remove"  title="Cerrar"><i class="fa fa-times"></i></button>
				
			</div><!-- /.box-tools -->
			
		</section><!-- /.box-header -->

		<section class="content">

			<div class="box-body with-border">

				<?php $form = ActiveForm::begin(); ?>

					<div class="row">
					
						<div class="col-lg-6">
						
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
						
						<div class="col-lg-6">	

								<?php $itemsOperacionesbancarias = ArrayHelper::map($operacionesbancarias, 'id','descripcion'); ?>

								<?= $form->field($model, 'id_operacion_bancaria')->dropDownList($itemsOperacionesbancarias, ['prompt' => 'Seleccione ...']) ?>
					
						</div>		
										
					</div>
					
					<div class="row">					
					
						<div class="col-lg-4">	

								<?php $itemsBancos = ArrayHelper::map($bancos, 'id','descripcion'); ?>

								<?= $form->field($model, 'id_banco')->dropDownList($itemsBancos, ['prompt' => 'Seleccione ...']) ?>
					
						</div>		
						
						<div class="col-lg-4">	

								<?php $itemsCuentas = ArrayHelper::map($cuentas, 'id','descripcion'); ?>

								<?= $form->field($model, 'id_cuenta')->dropDownList($itemsCuentas, ['prompt' => 'Seleccione ...']) ?>
					
						</div>			
						
						<div class="col-lg-4">	

								<?php $itemsCajas = ArrayHelper::map($cajas, 'id','descripcion'); ?>

								<?= $form->field($model, 'id_caja')->dropDownList($itemsCajas, ['prompt' => 'Seleccione ...']) ?>
					
						</div>						

					</div>
					

 					<div class="row">

						<div class="col-lg-6">

							<?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>
							
						</div>

					</div>  					
 					<div class="row">

						<div class="col-lg-6">

							<?= $form->field($model, 'debe')->textInput(['maxlength' => true]) ?>
							
						</div>
						<div class="col-lg-6">

							<?= $form->field($model, 'haber')->textInput(['maxlength' => true]) ?>
							
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
		
</section><!-- /.movbancos-create -->

