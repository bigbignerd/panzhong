<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PzStaff */

$this->title = 'Create Pz Staff';
$this->params['breadcrumbs'][] = ['label' => 'Pz Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pz-staff-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
