<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Crms */

$this->title = 'Update Crms: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Crms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="crms-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
