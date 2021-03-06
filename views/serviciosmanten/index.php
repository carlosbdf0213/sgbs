<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchmodels\ServiciosmantenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Serviciosmantens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serviciosmanten-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Serviciosmanten', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_servicio',
            'id_mantenimiento',
            'cantidad',
            'importe',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
