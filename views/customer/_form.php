<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<style>
    <?php include yii::getAlias('@web') . 'css/_form.css' ?>
</style>

<div class="customer-form">

    <?php $form = ActiveForm::begin(); ?>

	
	
		<div class="row">
			<div class="col-md-3">
				<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
			</div>
		</div>

	
		<div class="row">
			<div class="col-md-3">
				<?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>
			</div>
		</div>

	
		<div class="row">
			<div class="col-md-3">
				<?= $form->field($model, 'services')->textInput(['maxlength' => true]) ?>
			</div>
		</div>


    <div class="row">
        <div class="col-md-12 form-group">
            <a class="btn btn-default" href="index" style="margin-right: 10px;"><i class="fa fa-ban"></i>&nbsp; Cancel</a>
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp; Save</button>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
	
</script>
