<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Services */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="services-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php if($model->price == null): ?>
        <div class="form-group field-services-price has-success" style="display: none;">
            <label class="control-label" for="services-price">Цена</label>
            <input type="text" id="services-price" class="form-control" name="Services[price]">

            <div class="help-block"></div>
        </div>
        <label class="no_price_label">Цену уточнять у менеджера</label>
        <input class="no_price_input" type="checkbox" id="no_price" checked>
    <?php else: ?>
        <?= $form->field($model, 'price')->textInput() ?>
        <label class="no_price_label">Цену уточнять у менеджера</label>
        <input class="no_price_input" type="checkbox" id="no_price" >
    <?php endif; ?>



    <?= $form->field($model, 'file')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->dropDownList($status) ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
