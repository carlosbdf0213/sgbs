<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchmodels\CuitpaisesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cuitpaises';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuitpaises-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cuitpaises', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cuit_pais',
            'descripcion',
            'codigo',
            'tipo_sujeto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
