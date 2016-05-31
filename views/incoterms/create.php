<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Incoterms */

$this->title = 'Create Incoterms';
$this->params['breadcrumbs'][] = ['label' => 'Incoterms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="incoterms-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
