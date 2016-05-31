<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchmodels\CombustiblesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Combustibles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="combustibles-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Combustibles', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_camion',
            'fecha',
            'litros',
            'importe',
            // 'km_bitacora',
            // 'id_proveedor',
            // 'recorrido',
            // 'consumo',
            // 'rendimiento',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
