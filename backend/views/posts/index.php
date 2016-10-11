<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchPosts */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Сообщение пользователей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!--<p>
        <?= Html::a('Create Posts', ['create'], ['class' => 'btn btn-success']) ?>
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


            ['attribute' => 'title',
                'format' => 'text',
                'label' => 'Тема',
            ],
            /*['attribute' => 'text',
                'format' => 'text',
                'label' => 'Текст',
            ],*/

            // 'date',

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view} {delete}'],

        ],
    ]); ?>
</div>
