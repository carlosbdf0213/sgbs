<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tipodoccomprador */

$this->title = 'Create Tipodoccomprador';
$this->params['breadcrumbs'][] = ['label' => 'Tipodoccompradors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipodoccomprador-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
