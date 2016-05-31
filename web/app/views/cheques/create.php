<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cheques */

$this->title = 'Create Cheques';
$this->params['breadcrumbs'][] = ['label' => 'Cheques', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cheques-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
