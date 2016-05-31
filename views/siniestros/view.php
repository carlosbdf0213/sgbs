<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Siniestros */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Siniestros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siniestros-view">

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
            'referencia',
            'notas',
            'id_chofer',
            'fecha',
            'fecha_declaracion',
            'fecha_pago',
            'importe_indemnizacion',
            'importe_daños',
            'cia_contrario',
            'telef_contrario',
            'nombre_contrario',
            'poliza_contrario',
            'patente_contrario',
            'marca_contrario',
            'modelo_contrario',
            'color_contrario',
            'notas_contrario:ntext',
            'actuaciones:ntext',
        ],
    ]) ?>

</div>
