<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Camiones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="camiones-form">
<section class="camiones-create" style="padding-left: 20px;padding-right: 20px;"> 

	<section class="box box-primary ">

		<section class="box-header with-border"> 
		
			<h3 class="box-title"><span class="fa fa-truck text-aqua"></span>   <?= Html::encode($this->title) ?> </h3>
			
			<div class="box-tools pull-right">
			
				<button class="btn btn-primary btn-sm" data-widget="remove"  title="Cerrar"><i class="fa fa-times"></i></button>
				
			</div><!-- /.box-tools -->
			
		</section><!-- /.box-header -->

		<section class="content">

			<div class="box-body with-border">
				<?php $form = ActiveForm::begin(); ?>
					<div class="row" >						
						<div class="col-sm-6">
							<?= $form->field($model, 'id_chofer')->textInput() ?>
						</div>
					</div>
					
    

    <?= $form->field($model, 'patente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modelo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anio_fabric')->textInput() ?>

    <?= $form->field($model, 'nro_chasis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nro_motor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

   
							<?php echo $form->field($model, 'fecha_patente')->widget(
							
									DatePicker::className(), [
										'model' => $model,
										'attribute' => 'fecha_patente',
										'disabled' => false,
										'type' => DatePicker::TYPE_COMPONENT_PREPEND,
										'options' => ['placeholder' => 'Seleccione ...'],
										'pluginOptions' => [
											'autoclose' => true,
											'format' => 'dd/mm/yyyy',

										]
									])
								
							?>

    <?= $form->field($model, 'ejes')->textInput() ?>

    <?= $form->field($model, 'tara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'carga_util')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fin_garantia')->textInput() ?>

    <?= $form->field($model, 'fecha_itv')->textInput() ?>

    <?= $form->field($model, 'fecha_ult_revision')->textInput() ?>

    <?= $form->field($model, 'kms_ult_revision')->textInput(['maxlength' => true]) ?>

						<div class="col-sm-10">

							<?php $itemsTipomanten = ArrayHelper::map($tipomanten, 'id','descripcion'); ?>

							<?= $form->field($model, 'id_tipo_ult_manten')->dropDownList($itemsTipomanten, ['prompt' => 'Seleccione ...']) ?>

						</div>

    <?= $form->field($model, 'id_poliza')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
			</div><!-- /.box-body -->			
			
		</section><!-- /.content -->
		
		<section class="box-footer">
		
			<small><b><i><?= Html::encode($this->title) ?> </i></b> </small>
			
		</section><!-- /.box-footer -->
		
	</section><!-- /.box -->
		
</section><!-- /camiones-create -->
</div>
