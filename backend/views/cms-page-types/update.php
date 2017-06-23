<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CmsPageTypes */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Cms Page Types',
]) . $model->Name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cms Page Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->CmsPageTypeID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="cms-page-types-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
