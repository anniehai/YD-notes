<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Crms */

$this->title = 'Create Crms';
$this->params['breadcrumbs'][] = ['label' => 'Crms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="crms-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
