<?php
/**
 * Created by PhpStorm.
 * User: zhuchen
 * Date: 16/7/20
 * Time: 下午5:03
 */
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>