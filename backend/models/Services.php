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
 * @property string $date
 */
class Services extends \yii\db\ActiveRecord
{
    public $file;

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
            [['name', 'text', 'status'], 'required'],
            [['price', 'status'], 'integer'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['file'], 'file'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'price' => 'Цена',
            'img' => 'Картинка',
            'text' => 'Описание',
            'status' => 'Статус',
            'date' => 'Дата',
            'file' =>  'Картинка',
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
    public function getStatus()
    {
        $status = ServicesStatus::findOne($this->status);
        return $status->name;
    }
    public function getDate()
    {
        return date('  H:i:s d-m-Y', strtotime($this->date));
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
}
