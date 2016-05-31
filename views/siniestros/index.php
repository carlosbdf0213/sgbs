<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchmodels\SiniestrosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Siniestros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siniestros-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Siniestros', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'referencia',
            'notas',
            'id_chofer',
            'fecha',
            // 'fecha_declaracion',
            // 'fecha_pago',
            // 'importe_indemnizacion',
            // 'importe_daños',
            // 'cia_contrario',
            // 'telef_contrario',
            // 'nombre_contrario',
            // 'poliza_contrario',
            // 'patente_contrario',
            // 'marca_contrario',
            // 'modelo_contrario',
            // 'color_contrario',
            // 'notas_contrario:ntext',
            // 'actuaciones:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
