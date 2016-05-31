<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchmodels\OperacioncondivaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Operacioncondivas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operacioncondiva-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Operacioncondiva', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'descripcion',
            'alicuota',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
