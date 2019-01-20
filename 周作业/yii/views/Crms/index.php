<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CrmsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Crms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="crms-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Crms', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name:ntext',
            'category:ntext',
            'code',
            'price',
            'cover:ntext',
            //'loanStart:ntext',
            //'id',
            //'t_listcol',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
