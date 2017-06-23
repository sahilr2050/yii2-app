<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\CmsPages */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="cms-pages-form box box-danger">
    <?php $form = ActiveForm::begin(['options'=>['class'=>'box-body']]); ?>
    <?= $form->field($model, 'CmsPageTypeID')->textInput() ?>
    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'MetaTitle')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'MetaKeyword')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'MetaDescription')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Content')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'CreatedByID')->textInput() ?>
    <?= $form->field($model, 'DateCreated')->textInput() ?>
    <div class="box-footer">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>