<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Chequesdepositados */

$this->title = 'Create Chequesdepositados';
$this->params['breadcrumbs'][] = ['label' => 'Chequesdepositados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chequesdepositados-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
