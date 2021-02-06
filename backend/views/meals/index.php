<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Meals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meals-index">

    <h1><?= Html::encode($this->title) ?></h1>

<p class="test-jwn">HELLO</p>
    <p>
        <?= Html::a('Create Meals', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'status',
            'description',
            'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
