<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property integer $id
 * @property string $email
 * @property string $name
 * @property string $img
 * @property string $text
 * @property integer $status
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
            [['email', 'name', 'img', 'text', 'status'], 'required'],
            [['status'], 'integer'],
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
            'status' => 'Status',
            'date' => 'Date',
        ];
    }
    public static function create($data)
    {
        $comment = new self();
        $comment->email = $data['email'];
        $comment->name = $data['name'];
        $comment->text = $data['text'];
        $comment->status = 1;

        $comment->save();

        return $comment->id;

    }
}
