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
/* @var $searchModel app\models\searchmodels\MovbancosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/*                         
*/
$this->title = 'Movimientos Bancarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movbancos-index">

		<div class="content">

			<div class="box-body with-border">

				<div class="box-header">

					<?= Tabs::widget([
							'items' => [
								[
									'label' => 'Todos los Movimientos',
									'content' => $this->render('todos', [
										'searchModel' => $searchModel,
										'dataProvider' => $dataProvider,
										'bancos' => $bancos,
									]),
									'active' => true
								],								
								[
									'label' => 'Depósitos',
									'content' => $this->render('depositos', [
										'searchModel' => $searchModel,
										'dataProvider' => $dataProvider,
										'bancos' => $bancos,
									]),
								],
								[
									'label' => 'Transferencias',
									'content' => $this->render('transferencias', [
										'searchModel' => $searchModel,
										'dataProvider' => $dataProvider,
										'bancos' => $bancos,

									]),
								],
								[
									'label' => 'Extracciones',
									'content' => $this->render('extracciones', [
										'searchModel' => $searchModel,
										'dataProvider' => $dataProvider,
										'bancos' => $bancos,

									]),
								],
							]]);
					 ?>       				     				


				</div>

			</div>

		</div><!-- /.content -->

</div>
