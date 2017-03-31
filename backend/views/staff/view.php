<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PzStaff */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Pz Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pz-staff-view">

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
            'phone',
            'telephone',
            'email:email',
            [
                'attribute' => 'companyId',
                'value' => function($model){
                    return $model->companyMap[$model->companyId];
                }
            ],
            [
                'attribute' => 'deptId',
                'value' => function($model){
                    return $model->deptMap[$model->deptId];
                }
            ],
            [
                'attribute' => 'positionId',
                'value' => function($model){
                    return $model->posMap[$model->positionId];
                }
            ],
            
            'qq',
            'address',
            'joinTime:datetime',
            'leaveTime:datetime',
            'leaveDesc:ntext',
            'status',
            [
                'attribute' => 'status',
                'value' => function($model){
                    return ($model->status == 1)? '在职' : '已离职';
                }
            ],
        ],
    ]) ?>

</div>
