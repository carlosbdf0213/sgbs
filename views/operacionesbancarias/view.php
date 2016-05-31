<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use kartik\widgets\SwitchInput;

/* @var $this yii\web\View */
/* @var $model app\models\Operacionesbancarias */

$this->title = 'Ver la Operación Bancaria';
$this->params['breadcrumbs'][] = ['label' => 'Operaciones Bancarias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="operacionesbancarias-view" style="padding-left: 20px;padding-right: 20px;"> 

	<section class="box box-primary ">

		<section class="box-header with-border"> 
		
			<h3 class="box-title"><span class="fa fa-tag text-aqua"></span>   <?= Html::encode($this->title) ?> </i></h3>
			
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
					
						<div class="col-lg-10">

							<?= $form->field($model, 'descripcion')->textInput(['readonly' => true]) ?>

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

    






    

