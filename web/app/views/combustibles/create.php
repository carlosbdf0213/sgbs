<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Combustibles */

$this->title = 'Create Combustibles';
$this->params['breadcrumbs'][] = ['label' => 'Combustibles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="combustibles-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
