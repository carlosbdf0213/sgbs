<?php

use yii\helpers\Html;

use yii\helpers\ArrayHelper;

use yii\widgets\ActiveForm;

use kartik\widgets\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Operacionesbancarias */

$this->title = 'Nueva Operacion Bancaria';
$this->params['breadcrumbs'][] = ['label' => 'Operaciones Bancarias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="operacionesbancarias-create" style="padding-left: 20px;padding-right: 20px;"> 

	<section class="box box-primary ">

		<section class="box-header with-border"> 
		
			<h3 class="box-title"><span class="fa fa-tag text-aqua"></span>   <?= Html::encode($this->title) ?> </i></h3>
			
			<div class="box-tools pull-right">
			
				<button class="btn btn-primary btn-sm" data-widget="remove"  title="Cerrar"><i class="fa fa-times"></i></button>
				
			</div><!-- /.box-tools -->
			
		</section><!-- /.box-header -->

		<section class="content">

			<div class="box-body with-border">

				<?php $form = ActiveForm::begin(); ?>

					<div class="row">
					
						<div class="col-lg-10">

							<?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

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



    

