<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Unidadmedida */

$this->title = 'Create Unidadmedida';
$this->params['breadcrumbs'][] = ['label' => 'Unidadmedidas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unidadmedida-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
