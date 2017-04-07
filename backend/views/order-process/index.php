<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PzOrderProcessSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '订单流程';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pz-order-process-index box box-primary">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="box-header">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="box-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute' => 'orderId',
                    'value' => function($data){
                        return \backend\models\PzOrderProcess::staticOrderName($data->orderId);
                    }
                ],
                'desc',
                'money',
                [
                    'attribute' => 'type',
                    'value' => function($data) use($searchModel){
                        return $searchModel->typeMap[$data->type];
                    }
                ],
                [
                    'attribute' => 'created_at',
                    'value' => function($data){
                        return date('Y-m-d', $data->created_at);
                    }
                ],
                // 'created_at',
                // 'updated_at',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'header'=>'操作',
                    'headerOptions' => ['width'=>'10%'],
                    'template' => '{view} {update} {addRecord}',
                    'buttons'  => [
                        'view' => function($url, $model, $key){
                            return Html::a("查看", $url, ['title'=>'查看订单详情', 'class'=>'btn btn-xs btn-warning']);
                        },
                        'update' => function($url, $model, $key){
                            return Html::a("修改", $url, ['title'=>'修改订单详情', 'class'=>'btn btn-xs btn-primary']);
                        },
                    ],
                ],
            ],
        ]); ?>
    </div>
</div>
