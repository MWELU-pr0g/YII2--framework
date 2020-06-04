<?php 
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Penname</label>: <?= Html::encode($model->penname) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>