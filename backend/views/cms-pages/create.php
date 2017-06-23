<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CmsPages */

$this->title = Yii::t('app', 'Create Cms Pages');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cms Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cms-pages-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
