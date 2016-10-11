<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'first_name',
            //'last_name',
            'email:email',
            ['attribute' => 'services_id',
                'format' => 'text',
                'value'=>function($data)
                {
                    return $data->getService();
                },
            ],
            // 'number',
            // 'comment',
            // 'region_id',
            // 'city_id',
            // 'address',
            // 'more_address',
            // 'another_address',
            ['attribute' => 'status',
                'format' => 'text',
                'value'=>function($data)
                {
                    return $data->getStatus();
                },
            ],

            ['attribute' => 'date',
                'format' => 'text',
                'value'=>function($data)
                {
                    return $data->getDate();
                },
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
