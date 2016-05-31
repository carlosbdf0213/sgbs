<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Combustibles */

$this->title = 'Update Combustibles: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Combustibles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="combustibles-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
