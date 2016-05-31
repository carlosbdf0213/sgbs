<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tipocomprobante */

$this->title = 'Create Tipocomprobante';
$this->params['breadcrumbs'][] = ['label' => 'Tipocomprobantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipocomprobante-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
