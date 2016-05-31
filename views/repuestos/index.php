<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchmodels\RepuestosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Repuestos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="repuestos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Repuestos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'descripcion',
            'cantidad',
            'precio',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
