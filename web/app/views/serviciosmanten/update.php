<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Serviciosmanten */

$this->title = 'Update Serviciosmanten: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Serviciosmantens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="serviciosmanten-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
