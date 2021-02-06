<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Breads */

$this->title = 'Create Breads';
$this->params['breadcrumbs'][] = ['label' => 'Breads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="breads-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
