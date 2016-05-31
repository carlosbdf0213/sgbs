<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchmodels\ParametrosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parametros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parametros-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Parametros', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'denominacion',
            'domicilio',
            'localidad',
            'id_provincia',
            // 'fecha_inicio',
            // 'cuit',
            // 'id_tipo_responsable',
            // 'nro_agente_retenc',
            // 'nro_establec',
            // 'enc_linea1_izq',
            // 'enc_linea2_izq',
            // 'enc_linea3_izq',
            // 'enc_linea1_der',
            // 'enc_linea2_der',
            // 'enc_linea3_der',
            // 'fecha_desde',
            // 'fecha_hasta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
