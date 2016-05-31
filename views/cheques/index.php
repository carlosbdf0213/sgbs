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
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchmodels\ChequesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cheques Propios y De Terceros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cheques-index" style="padding-left: 20px;padding-right: 20px;">

	<div class="box box-primary">       

		<div class="box-header with-border"> 
		
			<h3 class="box-title"><span class="fa fa-exclamation-triangle text-red"> </span>  <?= Html::encode($this->title) ?></h3>
			
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
							['content'=>'Cheques Propios y De Terceros', 'options'=>['colspan'=>12,'class'=>'text-center warning']], 
						],
					]
				], 

				'columns' => [

					'fecha',
					'numero',
					'fecha_venc',
					
					[
						'attribute'=>'propios',
						'format'=>'text',
						'content'=>function($data){
							$terc = ( $data->propios == '1' ? 	'SI' : 'NO' );
						return $terc; },
						

					],				
					[
						'attribute' => 'banco', 
						'value' => 'banco.descripcion'
					],		
					[
						'attribute'=>'unificado',
						'format'=>'text',
							//$cont = ( $data->terceros == '0' ? $data->id_cliente : $data->id_proveedor);
						'content'=>function($data){
							$terc = 'No Cargado';
							if ( $data->id_cliente > 0  OR $data->id_proveedor > 0) {
								$terc = ( $data->propios == '0' ? 	$data->cliente->denominacion : $data->proveedor->denominacion );
							};
						return $terc; },
						

					],
					[
						'class'=>'kartik\grid\FormulaColumn', 							 
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
