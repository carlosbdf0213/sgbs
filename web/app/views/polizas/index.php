<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchmodels\PolizasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Polizas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="polizas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Polizas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'descripcion',
            'cia',
            'contacto',
            'telefono',
            // 'celular',
            // 'fax',
            // 'email:email',
            // 'fecha_pago',
            // 'fecha_venc',
            // 'cobertura:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
