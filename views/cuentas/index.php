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
/* @var $searchModel app\models\searchmodels\CuentasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cuentas Bancarias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuentas-index">

	<div class="box box-primary">       

		<div class="box-header with-border"> 
		
			<h3 class="box-title"><span class="fa fa-list-alt text-aqua"></span>   <?= Html::encode($this->title) ?></h3>
			
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
							['content'=>'Banco', 'options'=>['colspan'=>2,'class'=>'text-center warning']], 
							['content'=>'Cuenta Bancaria', 'options'=>['colspan'=>10, 'class'=>'text-center warning']], 
						],
					]
				], 

				'columns' => [

					[
						'attribute' => 'banco', 
						'value' => 'banco.descripcion'
					],

					'tipo',
					'numero',
					'descripcion',


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
