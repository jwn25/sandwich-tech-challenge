<?php

use common\models\Breads;
use common\models\Sauces;
use common\models\Tastes;
use common\models\Vegetables;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'bread_id')->dropDownList(ArrayHelper::map(Breads::find()->asArray()->all(), 'id', 'name'), ['prompt' => 'Select Bread'])->label('Select Bread'); ?>
    <?= $form->field($model, 'bread_size')->dropDownList(['10cm' => '10cm', '20cm' => '20cm', '30cm' => '30cm'], ['prompt' => 'Select Bread Size'])->label('Select Bread Size'); ?>
    <?= $form->field($model, 'baked')->radioList(['yes' => 'Yes', 'no' => 'No']); ?>
    <?= $form->field($model, 'taste_id')->dropDownList(ArrayHelper::map(Tastes::find()->asArray()->all(), 'id', 'name'), ['prompt' => 'Select Sandwich taste'])->label('Select Sandwich taste'); ?>


    <?= $form->field($model, 'extra_item')->dropDownList([
        'extra_bacon' => 'Extra Bacon',
        'double_meat' => 'Double meat',
        'extra_cheese' => 'Extra cheese'
    ], ['prompt' => 'Extras'])->label('Extras'); ?>


    <?= $form->field($model, 'vegetable_id')->dropDownList(ArrayHelper::map(Vegetables::find()->asArray()->all(), 'id', 'name'), ['prompt' => 'Select vegetable'])->label('Select vegetable'); ?>
    <?= $form->field($model, 'sauce_id')->dropDownList(ArrayHelper::map(Sauces::find()->asArray()->all(), 'id', 'name'), ['prompt' => 'Select Sauce'])->label('Select Sauce'); ?>
    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(['open' => 'Open', 'closed' => 'Closed'], ['prompt' => 'Status'])->label('Status'); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>


</div>