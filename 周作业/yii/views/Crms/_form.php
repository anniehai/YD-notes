<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Crms */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="crms-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'category')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'code')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'cover')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'loanStart')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
