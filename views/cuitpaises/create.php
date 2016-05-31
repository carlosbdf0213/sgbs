<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cuitpaises */

$this->title = 'Create Cuitpaises';
$this->params['breadcrumbs'][] = ['label' => 'Cuitpaises', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuitpaises-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
