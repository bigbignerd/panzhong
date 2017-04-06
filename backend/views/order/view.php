<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PzOrder */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Pz Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pz-order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('回列表', ['index'], ['class' => 'btn btn-success']) ?>
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
                'value' => function($data) use($model){
                    return $model->statusMap[$data->status];
                }
            ],
            'created_at:datetime',
            'updated_at:datetime',
            'start_at',
            'end_at',
            'remark:ntext',
        ],
    ]) ?>

</div>
