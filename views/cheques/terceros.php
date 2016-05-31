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
/* @var $searchModel app\models\searchmodels\ChequesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cheques de Terceros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cheques-index" style="padding-left: 20px;padding-right: 20px;">

	<div class="box box-primary">       

		<div class="box-header with-border"> 
		
			<h3 class="box-title"><span class="fa fa-exclamation-circle text-green"> </span>  <?= Html::encode($this->title) ?></h3>
			
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
							['content'=>'Cheques de Terceros', 'options'=>['colspan'=>12,'class'=>'text-center warning']], 
						],
					]
				], 

				'columns' => [
				
					[
						'class'=>'kartik\grid\DataColumn', 							 
						'attribute'=>'fecha',
						'hAlign'=>'right',
						'content'=>function($data){
							return  $data->getFormattedFecha(); },
			
					],	
					'numero',
					[
						'attribute' => 'banco', 
						'value' => 'banco.descripcion'
					],
					[
						'attribute' => 'estado',
						'format' => 'raw',						
						'value'=>function($row){
								  $values=[
								  'Cartera'=>'success',
								  'Depositado'=>'info',
								  'Entregado'=>'primary',
								  'Reemplazado'=>'warning',
								  'Rechazado'=>'danger',
								  ];
								  return Html::tag('span', $row->estado, ['class'=>'label label-'.$values[$row->estado]]);
						}
					],						
					[
						'attribute' => 'cliente', 
						'value' => 'cliente.denominacion'
					],				
					   // 
					[
						'class'=>'kartik\grid\DataColumn', 							 
						'attribute'=>'fecha_venc',
						'hAlign'=>'right',
						'content'=>function($data){
							return  $data->getFormattedFechaVenc(); },
			
					],					
					[
						'class'=>'kartik\grid\DataColumn', 							 
						'attribute'=>'fecha_cobro',
						'hAlign'=>'right',
						'content'=>function($data){
							return  $data->getFormattedFechaCobro();},
			
					],					
					[
						'class'=>'kartik\grid\DataColumn', 							 
						'attribute'=>'conciliado',
						'content'=>function($data,$row){
							  $values=[
							  '0'=>'glyphicon-remove text-danger',
							  '1'=>'glyphicon-ok text-success',
							  ];
							  $cont = ( $data->conciliado > 0 ? 'SI' : 'NO');
							  return Html::tag('span', '   ' .(($data->conciliado == 1) ? 'Si' : 'No').' '
							  , ['class'=>'glyphicon '.$values[$data->conciliado]]);
						}
					],
					[
						'class'=>'kartik\grid\DataColumn', 							 
						'attribute'=>'importe',
						'hAlign'=>'right',
						'value'=>function($model) {
						 return sprintf('$%10.2f',$model->importe);
									}
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
