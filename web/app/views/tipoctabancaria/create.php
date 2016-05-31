<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tipoctabancaria */

$this->title = 'Create Tipoctabancaria';
$this->params['breadcrumbs'][] = ['label' => 'Tipoctabancarias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipoctabancaria-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
