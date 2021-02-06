<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Sauces */

$this->title = 'Create Sauces';
$this->params['breadcrumbs'][] = ['label' => 'Sauces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sauces-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
