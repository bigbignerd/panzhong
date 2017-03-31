<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PzOrder */

$this->title = 'Create Pz Order';
$this->params['breadcrumbs'][] = ['label' => 'Pz Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pz-order-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
