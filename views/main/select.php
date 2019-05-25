<?php
use yii\helpers\Html;
use yii\grid\GridView;
?>

<?= Html::a('Delete filter', ['main/select'], ['class' => 'btn btn-primary']) ?>

<?=
GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'email',
        'phone',
        'message',
    ],
]); 
?>
