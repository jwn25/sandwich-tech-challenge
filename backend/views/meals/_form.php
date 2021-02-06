<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Meals */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="meals-form">

    <div class="row">
        <div class="col-sm-6">
        <?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>


<?= $form->field($model, 'status')->dropDownList(['Open' => 'Open', 'Closed' => 'Closed',], ['prompt' => 'Select Status']) ?>

<?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>


<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>
        </div>
    </div>
  

</div>