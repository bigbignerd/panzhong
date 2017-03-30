<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PzCompany */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Pz Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pz-company-view">

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
            'remark:ntext',
            'created_at:date',
            'updated_at:date',
        ],
    ]) ?>

</div>
