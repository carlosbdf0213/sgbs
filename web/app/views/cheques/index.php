<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchmodels\ChequesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cheques';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cheques-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cheques', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'terceros',
            'fecha',
            'id_caja',
            'id_banco',
            // 'numero',
            // 'estado',
            // 'cuit',
            // 'fecha_venc',
            // 'fecha_cobro',
            // 'conciliado',
            // 'clearing',
            // 'importe',
            // 'id_proveedor',
            // 'id_cliente',
            // 'observaciones:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
