<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $id
 * @property integer $region_id
 * @property string $name
 * @property string $phone_code
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region_id'], 'required'],
            [['region_id'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['phone_code'], 'string', 'max' => 7],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'region_id' => 'Region ID',
            'name' => 'Name',
            'phone_code' => 'Phone Code',
        ];
    }
    public static function getOption($id)
    {
        $city = self::find()->where(['region_id' => $id])->all();

        $option = '';
        foreach ($city as $value)
        {
            $option.= '<option id="'.$value->id.'"> '.$value->name.' </option>';
        }
        return $option;
    }
}
