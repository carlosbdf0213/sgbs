<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Polizas */

$this->title = 'Create Polizas';
$this->params['breadcrumbs'][] = ['label' => 'Polizas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="polizas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
