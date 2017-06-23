<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CmsPageTypes */

$this->title = Yii::t('app', 'Create CMS Page Types');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'CMS Page Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cms-page-types-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
