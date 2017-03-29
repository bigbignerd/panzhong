<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PzStaffSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pz Staff';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pz-staff-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pz Staff', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'companyId',
            'deptId',
            'positionId',
            'name',
            // 'phone',
            // 'telephone',
            // 'email:email',
            // 'qq',
            // 'address',
            // 'joinTime:datetime',
            // 'leaveTime:datetime',
            // 'leaveDesc:ntext',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
