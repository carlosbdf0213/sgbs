<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchmodels\MovbancosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Movbancos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movbancos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Movbancos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_operacion_bancaria',
            'descripcion',
            'fecha',
            'debe',
            // 'haber',
            // 'id_caja',
            // 'id_banco',
            // 'id_cuenta',
            // 'id_banco_dest',
            // 'id_cuenta_dest',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
