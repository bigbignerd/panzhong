<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PzPosition */

$this->title = 'Create Pz Position';
$this->params['breadcrumbs'][] = ['label' => 'Pz Positions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pz-position-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
