<?php
/* @var $this yii\web\View */

use common\models\Breads;
use common\models\Sauces;
use common\models\Tastes;
use common\models\Vegetables;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="text-center">
    <h3>Order <?= $order->meal->name ?></h3>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Enter your order detail</h4>
    </div>
    <div class="panel-body">
        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($order, 'bread_id')->dropDownList(ArrayHelper::map(Breads::find()->asArray()->all(), 'id', 'name'), ['prompt' => 'Select Bread'])->label('Select Bread'); ?>
        <?= $form->field($order, 'bread_size')->dropDownList(['10cm' => '10cm', '20cm' => '20cm', '30cm' => '30cm'], ['prompt' => 'Select Bread Size'])->label('Select Bread Size'); ?>
        <?= $form->field($order, 'baked')->radioList(['yes' => 'Yes', 'no' => 'No']); ?>
        <?= $form->field($order, 'taste_id')->dropDownList(ArrayHelper::map(Tastes::find()->asArray()->all(), 'id', 'name'), ['prompt' => 'Select Sandwich taste'])->label('Select Sandwich taste'); ?>


        <?= $form->field($order, 'extra_item')->dropDownList([
            'extra_bacon' => 'Extra Bacon',
            'double_meat' => 'Double meat',
            'extra_cheese' => 'Extra cheese'
        ], ['prompt' => 'Extras'])->label('Extras'); ?>


        <?= $form->field($order, 'vegetable_id')->dropDownList(ArrayHelper::map(Vegetables::find()->asArray()->all(), 'id', 'name'), ['prompt' => 'Select vegetable'])->label('Select vegetable'); ?>
        <?= $form->field($order, 'sauce_id')->dropDownList(ArrayHelper::map(Sauces::find()->asArray()->all(), 'id', 'name'), ['prompt' => 'Select Sauce'])->label('Select Sauce'); ?>
        <?= $form->field($order, 'address')->textInput(['maxlength' => true]) ?>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>