<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Destinos */

$this->title = 'Create Destinos';
$this->params['breadcrumbs'][] = ['label' => 'Destinos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="destinos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
