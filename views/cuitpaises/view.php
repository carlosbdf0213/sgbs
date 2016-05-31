<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cuitpaises */

$this->title = $model->cuit_pais;
$this->params['breadcrumbs'][] = ['label' => 'Cuitpaises', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuitpaises-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->cuit_pais], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cuit_pais], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cuit_pais',
            'descripcion',
            'codigo',
            'tipo_sujeto',
        ],
    ]) ?>

</div>
