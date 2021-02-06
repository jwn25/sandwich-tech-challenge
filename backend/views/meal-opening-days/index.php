<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Meal Opening Days';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meal-opening-days-index">

    <p>
        <?= Html::a('Create Meal Opening Days', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'meal.name',

            'day',
            'start',
            'end',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
