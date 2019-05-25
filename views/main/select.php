<?php
use yii\grid\GridView;
?>

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
