<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Movbancos */

$this->title = 'Create Movbancos';
$this->params['breadcrumbs'][] = ['label' => 'Movbancos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movbancos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
