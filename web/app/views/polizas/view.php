<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Polizas */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Polizas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="polizas-view">

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
            'descripcion',
            'cia',
            'contacto',
            'telefono',
            'celular',
            'fax',
            'email:email',
            'fecha_pago',
            'fecha_venc',
            'cobertura:ntext',
        ],
    ]) ?>

</div>
