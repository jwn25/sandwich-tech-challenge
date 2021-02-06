<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'customer.full_name',
            'meal.name',
            'bread.name',
            'bread_size',
            'baked',
            'taste.name',
            'extra_item',
            'vegetable.name',
            'sauce_id',
            'status',
            'address',
            'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
