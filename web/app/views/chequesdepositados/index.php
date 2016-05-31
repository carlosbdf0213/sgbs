<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchmodels\ChequesdepositadosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Chequesdepositados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chequesdepositados-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Chequesdepositados', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_deposito',
            'id_cheque',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
