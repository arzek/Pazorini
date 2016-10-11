<?php

namespace app\models;

use Yii;
use app\models\Region;
use app\models\City;
use app\models\OrderStatus;
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

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'services_id', 'number', 'comment', 'region_id', 'city_id', 'address', 'more_address', 'status'], 'required'],
            [['services_id', 'region_id', 'city_id', 'another_address', 'status'], 'integer'],
            [['date'], 'safe'],
            [['first_name', 'last_name', 'email', 'number', 'comment', 'address', 'more_address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            //'id' => 'ID',
            'first_name' => 'Имя',
            'last_name' => 'Фамилия',
            'email' => 'Email',
            'services_id' => 'Услуга',
            'number' => 'Номер',
            'comment' => 'Комментарий',
            'region_id' => 'Область',
            'city_id' => 'Город',
            'address' => 'Адрес',
            'more_address' => 'Подъезд, этаж и т.п.',
            'another_address' => 'Доставка по другому адресу',
            'status' => 'Статус',
            'date' => 'Дата',
        ];
    }

    public function getService()
    {
        $services = Services::findOne($this->services_id);
        return $services->name;
    }
    public function getStatus()
    {
        $status = OrderStatus::findOne($this->status);
        return $status->name;
    }
    public function getDate()
    {
        return date('  H:i:s d-m-Y', strtotime($this->date));
    }
    public function getRegion()
    {
        $region = Region::findOne($this->region_id);
        return $region->name;
    }
    public function getCity()
    {
        $city = City::findOne($this->city_id);
        return $city->name;
    }
    public function getAnotherAddress()
    {
        if($this->another_address == 0)
        {
            return "Нет";
        }else
        {
            return "Да";
        }
    }
}
