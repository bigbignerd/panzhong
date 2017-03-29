<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PzCompany */

$this->title = 'Create Pz Company';
$this->params['breadcrumbs'][] = ['label' => 'Pz Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pz-company-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
