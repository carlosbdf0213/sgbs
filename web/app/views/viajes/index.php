<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchmodels\ViajesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Viajes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="viajes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Viajes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fecha_salida',
            'kms_salida',
            'fecha_llegada',
            'kms_llegada',
            // 'id_chofer',
            // 'id_camion',
            // 'km_plus',
            // 'litros_comb',
            // 'importe_comb',
            // 'importe_peajes',
            // 'importe_gastos',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
