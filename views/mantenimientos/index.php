<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchmodels\MantenimientosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mantenimientos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mantenimientos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mantenimientos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_camion',
            'descripcion',
            'fecha',
            'id_tipo_manten',
            // 'fecha_revision',
            // 'kms_revision',
            // 'importe',
            // 'id_proveedor',
            // 'fecha_ult_revision',
            // 'dias_vencimiento',
            // 'fecha_siguiente_revision',
            // 'km_ult_revision',
            // 'km_vto',
            // 'km_siguiente_revision',
            // 'observaciones:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
