<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property integer $id
 * @property string $name
 * @property integer $price
 * @property string $img
 * @property string $text
 * @property integer $status
 * @property integer $payment_type
 * @property string $date
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'img', 'text', 'status'], 'required'],
            [['price', 'status', 'payment_type'], 'integer'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['name', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'img' => 'Img',
            'text' => 'Text',
            'status' => 'Status',
            'payment_type' => 'Payment Type',
            'date' => 'Date',
        ];
    }
    public function getImg($width,$height)
    {

        if($this->img!=null)
        {
            return 'http://'.$_SERVER['HTTP_HOST'].'/timthumb.php?src=http://'.$_SERVER['HTTP_HOST'].'/uploads/service/'.$this->img.'&w='.$width.'&h='.$height;
        }else
        {
            return  'http://'.$_SERVER['HTTP_HOST'].'/timthumb.php?src=http://'.$_SERVER['HTTP_HOST'].'/uploads/service/no-image.png'.'&w='.$width.'&h='.$height;
        }
    }
    public function getPrice()
    {
        if($this->price == null)
        {
            return "Цену уточнять у менеджера";
        }else
        {
            return $this->price." грн.";
        }
    }
    public function issetPrice()
    {
        if($this->price == null)
            return 0;
        else
            return 1;
    }
}
