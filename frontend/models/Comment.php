<?php

namespace app\models;

use Yii;
use yii\base\ErrorException;

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


    public static function create()
    {
        $comment = new Comment();
        $comment->email = $_POST['Comment']['comment_email'];
        $comment->name = $_POST['Comment']['comment_name'];
        $comment->text = $_POST['Comment']['comment_text'];

        if(isset($_POST['Comment']['comment_type']))
            $comment->type = $_POST['Comment']['comment_type'];

        $comment->status = 1;


        $comment->save();

        return $comment->id;

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
    public static function setImg($id)
    {
        try
        {
            $сomment = self::findOne($id);

            $extension = strtolower(substr(strrchr($_FILES['img']['name'], '.'), 1));

            $filename = md5($id.time());

            move_uploaded_file($_FILES["img"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/frontend/web/uploads/сomments/".$filename.'.'.$extension);

            $сomment->img = $filename.'.'.$extension;
            $сomment->save();

            return 1;
        }catch (ErrorException $e)
        {
            return $e;
        }

    }
}
