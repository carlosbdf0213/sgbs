<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tipodocimpositivo */

$this->title = 'Create Tipodocimpositivo';
$this->params['breadcrumbs'][] = ['label' => 'Tipodocimpositivos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipodocimpositivo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
