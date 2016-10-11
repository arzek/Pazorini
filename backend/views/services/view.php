<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Services */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            //'id',
            'name',
            ['attribute' => 'price',
                'format' => 'text',
                'value'=> $model->getPrice()
            ],
            ['attribute' => 'img',
                'format' => 'image',
                'value'=> $model->getImg(300,300)
            ],
            'text:ntext',
            ['attribute' => 'status',
                'format' => 'text',
                'value'=> $model->getStatus()
            ],
            ['attribute' => 'date',
                'format' => 'text',
                'label' => 'Дата',
                'value'=> $model->getDate()
            ],
        ],
    ]) ?>

</div>
