<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Serviciosmanten */

$this->title = 'Create Serviciosmanten';
$this->params['breadcrumbs'][] = ['label' => 'Serviciosmantens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serviciosmanten-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
