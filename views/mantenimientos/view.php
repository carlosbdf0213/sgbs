<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mantenimientos */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mantenimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mantenimientos-view">

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
            'id_camion',
            'descripcion',
            'fecha',
            'id_tipo_manten',
            'fecha_revision',
            'kms_revision',
            'importe',
            'id_proveedor',
            'fecha_ult_revision',
            'dias_vencimiento',
            'fecha_siguiente_revision',
            'km_ult_revision',
            'km_vto',
            'km_siguiente_revision',
            'observaciones:ntext',
        ],
    ]) ?>

</div>
