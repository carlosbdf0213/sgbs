<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tipomanten */

$this->title = 'Create Tipomanten';
$this->params['breadcrumbs'][] = ['label' => 'Tipomantens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipomanten-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
