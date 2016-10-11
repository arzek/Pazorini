<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts_user".
 *
 * @property integer $id
 * @property string $email
 * @property string $name
 * @property string $title
 * @property string $text
 * @property string $date
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts_user';
    }

    public static function create($data)
    {
        $massage = new self();
        $massage->email = $data['message_email'];
        $massage->name = $data['message_name'];
        $massage->title = $data['message_title'];
        $massage->text= $data['message_text'];

        $massage->save();

        return $massage->id;
    }
}
