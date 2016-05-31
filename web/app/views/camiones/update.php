<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Camiones */

$this->title = 'Update Camiones: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Camiones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="camiones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
