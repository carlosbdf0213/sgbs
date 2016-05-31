<?php


use yii\helpers\Html;
use kartik\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\grid\FormulaColumn;
use kartik\grid\DataColumn;
use kartik\grid\EditableColumn;
use kartik\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchmodels\PolizasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */ 

$this->title = 'Polizas';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="polizas-index" style="padding-left: 20px;padding-right: 20px;"> 

	<div class="box box-primary">       

		<div class="box-header with-border"> 
		
			<h3 class="box-title"><span class="fa fa-pinterest-square text-blue"></span>   <?= Html::encode($this->title) ?></h3>
			
			<div class="box-tools pull-right">
			
                <?= Html::a('', ['create'], ['class' => 'btn btn-primary btn-sm fa fa-magic','title' => 'Nuevo']) ?>
			
				<button class="btn btn-primary btn-sm" data-widget="remove"  title="Cerrar"><i class="fa fa-times"></i></button>
				
			</div><!-- /.box-tools -->
			
		</div><!-- /.box-header -->
		
		<div class="box-body">

			<?= GridView::widget([
			
				'dataProvider' => $dataProvider,
				'headerRowOptions'=>['class'=>'kartik-sheet-style'],
				'filterRowOptions'=>['class'=>'kartik-sheet-style'],
				'pjax'=>true, 
				'beforeHeader'=>[
					[
						'columns'=>[
							['content'=>'Multas', 'options'=>['colspan'=>12, 'class'=>'text-center warning']], 
						],
					]
				], 

				'columns' => [
          
					'cia',
					'contacto',
					'telefono',
					'celular',
					// 'fax',
					// 'email:email',
					// 'fecha_pago',
					'fecha_venc',
					'cobertura:ntext',
					[
						'class' => '\kartik\grid\ActionColumn',
						'header' => 'Acciones',
						'headerOptions' => ['style'=>'color:#3c8dbc'],
						'hiddenFromExport'=>true,
					],
					
				],
				
				'layout'=>"{items}{pager}",
				
		
			]); ?>

		</div><!-- /.box-body -->
		
		<div class="box-footer">
		
			<small><b><i>Tabla de <?= Html::encode($this->title) ?></i></b> </small>
			
		</div><!-- /.box-footer -->
		
	</div><!-- /.box -->
	
</div><!-- polizas-index -->
