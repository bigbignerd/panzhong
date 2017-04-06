<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PzOrderProcess */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pz Order Processes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pz-order-process-view">

    <h1><?= Html::encode($model->orderName."交易记录") ?></h1>

    <p>
        <?= Html::a('回列表', ['index','id'=>$model->orderId], ['class' => 'btn btn-success']) ?>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'orderName',
            'desc',
            'money',
            [
                'attribute' => 'type',
                'value' => function($data) use($model){
                    return $model->typeMap[$data->type];
                }
            ],
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
