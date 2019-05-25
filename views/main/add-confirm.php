<?php
use yii\helpers\Html;
?>
<p>Message was added successfully:</p>

<ul>
    <li><label>Message</label>: <?= Html::encode($model->message) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
    <li><label>Phone</label>: <?= Html::encode($model->phone) ?></li>
    <?= Html::a('Show all messages', ['main/select'], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('Add new message', ['main/index'], ['class' => 'btn btn-primary']) ?>
</ul>