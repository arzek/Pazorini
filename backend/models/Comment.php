<?php

namespace app\models;

use Yii;
use app\models\CommentStatus;
/**
 * This is the model class for table "comment".
 *
 * @property integer $id
 * @property string $email
 * @property string $name
 * @property string $img
 * @property string $text
 * @property integer $status
 * @property integer $type
 * @property string $date
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'name', 'text', 'status'], 'required'],
            [['status', 'type'], 'integer'],
            [['date'], 'safe'],
            [['email', 'name', 'img', 'text'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'name' => 'Name',
            'img' => 'Img',
            'text' => 'Text',
            'status' => 'Статус',
            'type' => 'Тип',
            'date' => 'Дата',
        ];
    }
    public function getImg($width,$height)
    {

        if($this->img!=null)
        {
            return 'http://'.$_SERVER['HTTP_HOST'].'/timthumb.php?src=http://'.$_SERVER['HTTP_HOST'].'/uploads/сomments/'.$this->img.'&w='.$width.'&h='.$height;
        }else
        {
            return  'http://'.$_SERVER['HTTP_HOST'].'/timthumb.php?src=http://'.$_SERVER['HTTP_HOST'].'/uploads/сomments/no-image.png'.'&w='.$width.'&h='.$height;
        }
    }
    public function getStatus()
    {
        $status = CommentStatus::findOne($this->status);
        return $status->name;
    }
    public function getDate()
    {
        return date('  H:i:s d-m-Y', strtotime($this->date));
    }
    public function getType()
    {
        if($this->type == null)
        {
            return "Комментарий на странице 'Бизнес с Китаем' ";
        }else
        {
            $sevise = Services::findOne($this->type);
            return "Комментарий к услуге ".$sevise->name;
        }
    }
}
