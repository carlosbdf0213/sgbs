<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Compras */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Compras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compras-view">

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
            'mes_fiscal',
            'anio_fiscal',
            'id_proveedor',
            'id_tipo_comprobante',
            'letra',
            'sucursal',
            'nro_comprobante',
            'fecha',
            'id_destino',
            'detalle',
            'neto_gravado',
            'no_gravado',
            'imp_internos',
            'imp_municipales',
            'imp_provinciales',
            'imp_nacionales',
            'percepcion',
            'ing_brutos',
            'perc_iva',
            'perc_dgr',
            'tasa_1_iva',
            'importe_1_iva',
            'tasa_2_iva',
            'importe_2_iva',
            'tasa_3_iva',
            'importe_3_iva',
            'tasa_4_iva',
            'importe_4_iva',
            'tasa_5_iva',
            'importe_5_iva',
            'total',
        ],
    ]) ?>

</div>
