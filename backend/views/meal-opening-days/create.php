<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MealOpeningDays */

$this->title = 'Create Meal Opening Days';
$this->params['breadcrumbs'][] = ['label' => 'Meal Opening Days', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meal-opening-days-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
