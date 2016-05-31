<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Camiones */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Camiones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="camiones-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'id_chofer',
            'patente',
            'marca',
            'modelo',
            'tipo',
            'anio_fabric',
            'nro_chasis',
            'nro_motor',
            'color',
            'fecha_patente',
            'ejes',
            'tara',
            'carga_util',
            'fin_garantia',
            'fecha_itv',
            'fecha_ult_revision',
            'kms_ult_revision',
            'id_tipo_ult_manten',
            'id_poliza',
        ],
    ]) ?>

</div>
