<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comment_status".
 *
 * @property integer $id
 * @property string $name
 */
class CommentStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
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
            'name' => 'Name',
        ];
    }
    public static function getArray()
    {
        $old_status = self::find()->all();
        $new_status = [];

        foreach ($old_status as $item)
        {
            $new_status[$item->id] = $item->name;

        }
        return $new_status;
    }
}
