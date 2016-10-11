<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ServicesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Услуги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать услугу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'name',
            ['attribute' => 'price',
                'format' => 'text',
                'value'=> function($data)
                {
                    return $data->getPrice();
                }
            ],
            ['attribute' => 'img',
                'format' => 'image',
                'value'=>function($data)
                {
                    return $data->getImg(200,200);
                },
            ],
            'text:ntext',
            ['attribute' => 'status',
                'format' => 'text',
                'value'=> function($data)
                {
                    return $data->getStatus();
                }
            ],
            ['attribute' => 'date',
                'format' => 'text',
                'value'=> function($data)
                {
                    return $data->getDate();
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
