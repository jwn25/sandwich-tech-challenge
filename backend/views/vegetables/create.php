<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Vegetables */

$this->title = 'Create Vegetables';
$this->params['breadcrumbs'][] = ['label' => 'Vegetables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vegetables-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
