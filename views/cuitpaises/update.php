<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cuitpaises */

$this->title = 'Update Cuitpaises: ' . ' ' . $model->cuit_pais;
$this->params['breadcrumbs'][] = ['label' => 'Cuitpaises', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cuit_pais, 'url' => ['view', 'id' => $model->cuit_pais]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cuitpaises-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
