<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchmodels\VentasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ventas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ventas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ventas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_cliente',
            'id_tipo_comprobante',
            'letra',
            'sucursal',
            // 'nro_comprobante',
            // 'fecha',
            // 'detalle',
            // 'neto_gravado',
            // 'no_gravado',
            // 'imp_internos',
            // 'imp_municipales',
            // 'imp_provinciales',
            // 'imp_nacionales',
            // 'percepcion',
            // 'ing_brutos',
            // 'perc_iva',
            // 'perc_dgr',
            // 'tasa_1_iva',
            // 'importe_1_iva',
            // 'tasa_2_iva',
            // 'importe_2_iva',
            // 'tasa_3_iva',
            // 'importe_3_iva',
            // 'tasa_4_iva',
            // 'importe_4_iva',
            // 'tasa_5_iva',
            // 'importe_5_iva',
            // 'total',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
