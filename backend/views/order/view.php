<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Order */

$this->title = "Заказ №".$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-view">

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
            'first_name',
            'last_name',
            'email:email',
            ['attribute' => 'img',
                'format' => 'text',
                'value'=> $model->getService()
            ],
            'number',


            ['attribute' => 'region_id',
                'format' => 'text',
                'value'=> $model->getRegion()
            ],
            ['attribute' => 'city_id',
                'format' => 'text',
                'value'=> $model->getCity()
            ],
            'address',
            'more_address',

            ['attribute' => 'another_address',
                'format' => 'text',
                'value'=> $model->getAnotherAddress()
            ],
            ['attribute' => 'status',
                'format' => 'text',
                'value'=> $model->getStatus()
            ],
            'comment',
            ['attribute' => 'date',
                'format' => 'text',
                'value'=> $model->getDate()
            ],
        ],
    ]) ?>

</div>
