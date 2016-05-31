<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Parametros */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Parametros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parametros-view">

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
            'denominacion',
            'domicilio',
            'localidad',
            'id_provincia',
            'fecha_inicio',
            'cuit',
            'id_tipo_responsable',
            'nro_agente_retenc',
            'nro_establec',
            'enc_linea1_izq',
            'enc_linea2_izq',
            'enc_linea3_izq',
            'enc_linea1_der',
            'enc_linea2_der',
            'enc_linea3_der',
            'fecha_desde',
            'fecha_hasta',
        ],
    ]) ?>

</div>
