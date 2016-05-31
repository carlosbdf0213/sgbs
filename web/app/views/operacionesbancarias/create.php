<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OperacionesBancarias */

$this->title = 'Create Operaciones Bancarias';
$this->params['breadcrumbs'][] = ['label' => 'Operaciones Bancarias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operaciones-bancarias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
