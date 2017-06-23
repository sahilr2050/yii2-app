<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CmsPages */

$this->title = 'View '.$model->Name.' information';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cms Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cms-pages-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title"></h3>
                    <p>
                        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->CmsPageID], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->CmsPageID], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>
                </div>
                <div class="box-body">
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'CmsPageID',
                            'CmsPageTypeID',
                            'Name',
                            'MetaTitle',
                            'MetaKeyword',
                            'MetaDescription',
                            'Content:ntext',
                            'CreatedByID',
                            'DateCreated',
                        ],
                    ]) ?>
                </div>
                <div class="box-footer clearfix">
                    <!-- <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul> -->
                </div>
            </div>

        </div>
        <!-- /.col -->
    </div>
</div>