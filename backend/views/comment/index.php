<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchComment */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Комментарии';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!--<p>
        <?= Html::a('Create Comment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'email:email',
            ['attribute' => 'name',
                'format' => 'text',
                'label' => 'Имя',
            ],
            ['attribute' => 'img',
                'format' => 'image',
                'label' => 'Картинка',
                'value'=>function($data)
                {
                    return $data->getImg(200,200);
                },
            ],

           // 'text',

            [
                'attribute' => 'status',
                'format' => 'ntext',
                'label' => 'Статус',
                'value' => function($data)
                {
                    return $data->getStatus();
                }

            ],
            [
                'attribute' => 'type',
                'format' => 'ntext',
                'label' => 'Тип',
                'value' => function($data)
                {
                    return $data->getType();
                }

            ],
            [
                'attribute' => 'date',
                'format' => 'ntext',
                'label' => 'Дата',
                'value' => function($data)
                {
                    return $data->getDate();
                }

            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
