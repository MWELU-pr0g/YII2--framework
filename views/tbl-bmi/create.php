<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblBmi */

$this->title = 'Create Tbl Bmi';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Bmis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-bmi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
