<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CmsPageTypesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Cms Page Types');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cms-page-types-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(['clientOptions' => ['method' => 'POST']]); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <div class="row">
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title"></h3>
                    <p>
                        <?= Html::a(Yii::t('app', 'Create Cms Page Types'), ['create'], ['class' => 'btn btn-success']) ?>
                    </p>
                </div>
                <div class="box-body">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'CmsPageTypeID',
                            'Name',
                            //'CreatedByID',
                            'DateCreated',
                            [
                                'header'  => 'Action',
                                'class' => 'yii\grid\ActionColumn'
                            ],
                        ],
                    ]); ?>
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
    <?php Pjax::end(); ?>
</div>
