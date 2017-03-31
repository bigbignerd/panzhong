<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PzOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pz Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pz-order-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pz Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'salesman',
            'deposit',
            'sum',
            // 'status',
            // 'created_at',
            // 'updated_at',
            // 'start_at',
            // 'end_at',
            // 'remark:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
