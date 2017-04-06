<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PzOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pz Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pz-order-index box box-primary">

    <div class="box-header">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="box-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'name',
                [
                'attribute' => 'salesman',
                    'value' => function($data){
                        return \backend\models\PzOrder::orderSalesman($data->salesman);
                    }
                ],
                'deposit',
                'sum',
                [
                    'attribute' => 'status',
                    'value' => function($data){
                        return $data->statusMap[$data->status];
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
                // 'start_at',
                // 'end_at',
                // 'remark:ntext',

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
                        'addRecord' => function($url, $model, $key){
                            $url = Yii::$app->urlManager->createAbsoluteUrl(['order-process/create','orderId'=>$model->id]);
                            return Html::a("添加记录", $url, ['title'=>'为订单添加记录', 'class'=>'btn btn-xs btn-success'])
                        }
                    ],
                ],
            ],
        ]); ?>
    </div>
</div>
