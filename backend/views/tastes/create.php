<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tastes */

$this->title = 'Create Tastes';
$this->params['breadcrumbs'][] = ['label' => 'Tastes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tastes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
