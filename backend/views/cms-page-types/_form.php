<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CmsPageTypes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cms-page-types-form box box-danger">

    <?php $form = ActiveForm::begin(['options'=>['class'=>'box-body']]); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?php
    /* $form->field($model, 'CreatedByID')->textInput();
    $form->field($model, 'DateCreated')->textInput(); */
    ?>

    <div class="box-footer">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
