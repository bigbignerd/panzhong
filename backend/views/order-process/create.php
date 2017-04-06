<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PzOrderProcess */

$this->title = 'Create Pz Order Process';
$this->params['breadcrumbs'][] = ['label' => 'Pz Order Processes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pz-order-process-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
