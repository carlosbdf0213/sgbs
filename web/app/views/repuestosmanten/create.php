<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Repuestosmanten */

$this->title = 'Create Repuestosmanten';
$this->params['breadcrumbs'][] = ['label' => 'Repuestosmantens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="repuestosmanten-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
