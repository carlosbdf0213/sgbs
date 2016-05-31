<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Repuestos */

$this->title = 'Create Repuestos';
$this->params['breadcrumbs'][] = ['label' => 'Repuestos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="repuestos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
