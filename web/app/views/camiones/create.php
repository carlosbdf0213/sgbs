<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Camiones */

$this->title = 'Create Camiones';
$this->params['breadcrumbs'][] = ['label' => 'Camiones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="camiones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
