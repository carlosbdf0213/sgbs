<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchmodels\MultasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Multas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="multas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Multas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_chofer',
            'fecha',
            'descripcion',
            'alegato:ntext',
            // 'importe',
            // 'fecha_venc',
            // 'fecha_pago',
            // 'observaciones:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
