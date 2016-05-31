<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchmodels\CamionesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Camiones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="camiones-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Camiones', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_chofer',
            'patente',
            'marca',
            'modelo',
            // 'tipo',
            // 'anio_fabric',
            // 'nro_chasis',
            // 'nro_motor',
            // 'color',
            // 'fecha_patente',
            // 'ejes',
            // 'tara',
            // 'carga_util',
            // 'fin_garantia',
            // 'fecha_itv',
            // 'fecha_ult_revision',
            // 'kms_ult_revision',
            // 'id_tipo_ult_manten',
            // 'id_poliza',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
