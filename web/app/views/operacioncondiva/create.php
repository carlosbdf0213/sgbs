<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Operacioncondiva */

$this->title = 'Create Operacioncondiva';
$this->params['breadcrumbs'][] = ['label' => 'Operacioncondivas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operacioncondiva-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
