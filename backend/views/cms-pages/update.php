<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CmsPages */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Cms Pages',
]) . $model->Name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cms Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->CmsPageID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="cms-pages-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
