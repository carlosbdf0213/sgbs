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
/* @var $searchModel app\models\searchmodels\ComprasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ventas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compras-index"  style="padding-left: 20px;padding-right: 20px;">

	<div class="box box-primary">       

		<div class="box-header with-border"> 
		
			<h3 class="box-title"><span class="fa fa-chrome text-red"></span>   <?= Html::encode($this->title) ?></h3>
			
			<div class="box-tools pull-right">
			
                <?= Html::a('', ['create'], ['class' => 'btn btn-primary btn-sm fa fa-magic','title' => 'Nuevo']) ?>
			
				<button class="btn btn-primary btn-sm" data-widget="remove"  title="Cerrar"><i class="fa fa-times"></i></button>
				
			</div><!-- /.box-tools -->
			
		</div><!-- /.box-header -->
		
		<div class="box-body">

			<?= GridView::widget([
			
				'dataProvider' => $dataProvider,
				//'headerRowOptions'=>['class'=>'kartik-sheet-style'],
				//'filterRowOptions'=>['class'=>'kartik-sheet-style'],
				'pjax'=>true, 
				'beforeHeader'=>[
					[
						'columns'=>[
							['content'=>'Imputado en Período', 'options'=>['colspan'=>2,'class'=>'text-center warning']], 
							['content'=>'Proveedor', 'options'=>['colspan'=>1,'class'=>'text-center warning']], 
							['content'=>'Comprobante', 'options'=>['colspan'=>9,'class'=>'text-center warning']], 

						],
					]
				], 

				'columns' => [					
					[
						'class'=>'kartik\grid\DataColumn', 
						'attribute' => 'cliente', 
						'value' => 'cliente.denominacion',
					],
					[
						'class'=>'kartik\grid\DataColumn', 
						'attribute' => 'tipocomprobante', 
						'value' => 'tipocomprobante.descripcion',
					],
					[
						'class'=>'kartik\grid\DataColumn', 	
						'attribute' => 'letra',
					],
					[
						'class'=>'kartik\grid\DataColumn', 							 
						'attribute'=>'sucursal',
						'hAlign'=>'right',
						'value'=>function($model) {
						 return sprintf('%04d',$model->sucursal);
									}
					],					
					[
						'class'=>'kartik\grid\DataColumn', 							 
						'attribute'=>'nro_comprobante',
						'hAlign'=>'right',
						'value'=>function($model) {
						 return sprintf('%08d',$model->nro_comprobante);
									}
					],	
					
					[
						'class'=>'kartik\grid\DataColumn', 	
						'attribute' => 	'fecha',
					],

					[
						'class'=>'kartik\grid\DataColumn', 	
						'attribute' => 'detalle',
						'contentOptions'=>['style'=>'width: 150px;']
					],

					[
						'class'=>'kartik\grid\FormulaColumn', 							 
						'attribute'=>'total',
						'hAlign'=>'right',
						'value'=>'total',
						'format'=>['decimal',2]
					],
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


</div>
