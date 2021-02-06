<?php

use common\models\Meals;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MealOpeningDays */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="meal-opening-days-form">

<div class="row">
    <div class="col-sm-6">
    <?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'meal_id')->dropDownList(ArrayHelper::map(Meals::find()->asArray()->all(), 'id', 'name'), ['prompt' => 'Select Meal'])->label('Select Meal'); ?>

<?= $form->field($model, 'day')->dropDownList(['sunday' => 'Sunday', 'monday' => 'Monday', 'tuesday' => 'Tuesday', 'wednesday' => 'Wednesday', 'thursday' => 'Thursday', 'friday' => 'Friday', 'saturday' => 'Saturday'], ['prompt' => 'Select Day Name']) ?>

<?= $form->field($model, 'start')->input('time') ?>

<?= $form->field($model, 'end')->input('time') ?>


<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

    </div>
</div>
   

</div>
