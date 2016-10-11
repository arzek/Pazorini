<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Comment */

$this->title = 'Комментарий от '.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'email:email',
            ['attribute' => 'name',
                'format' => 'text',
                'label' => 'Имя',
            ],
            ['attribute' => 'img',
                'format' => 'image',
                'label' => ' Картинка',
                'value'=> $model->getImg(300,300)
            ],

            ['attribute' => 'text',
                'format' => 'text',
                'label' => 'Текст',
            ],
            ['attribute' => 'status',
                'format' => 'text',
                'label' => 'Статус',
                'value'=> $model->getStatus()
            ],
            ['attribute' => 'type',
                'format' => 'text',
                'label' => 'Тип',
                'value'=> $model->getType()
            ],
            ['attribute' => 'date',
                'format' => 'text',
                'label' => 'Дата',
                'value'=> $model->getDate()
            ],
        ],
    ]) ?>

</div>
