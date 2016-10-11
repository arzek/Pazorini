<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property integer $services_id
 * @property string $number
 * @property string $comment
 * @property integer $region_id
 * @property integer $city_id
 * @property string $address
 * @property string $more_address
 * @property integer $another_address
 * @property integer $type_payment
 * @property integer $status
 * @property string $date
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }


    public static function create($data)
    {
        $order = new self();

        $order->last_name = $data['final_last_name'];
        $order->first_name = $data['final_first_name'];
        $order->email = $data['final_email'];
        $order->number = $data['final_number'];
        $order->comment = $data['final_comment'];

        $order->region_id = $data['final_region_id'];
        $order->city_id = $data['final_city_id'];
        $order->address = $data['final_address'];
        $order->more_address = $data['final_more_address'];
        $order->another_address = $data['final_another_address'];
        $order->type_payment = $data['final_type_payment'];
        $order->services_id = $data['services_id'];
        $order->status = 1;
        $order->save();
    }
}
