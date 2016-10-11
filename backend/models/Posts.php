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

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'name', 'title', 'text'], 'required'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['email', 'name', 'title'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'text' => 'Text',
            'date' => 'Date',
        ];
    }
    public static function getData($date)
    {
        return date('  H:i:s d-m-Y', strtotime($date));
    }
}
