<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_bmi".
 *
 * @property int $id
 * @property string $height
 * @property string $weight
 * @property int $user_id
 * @property string $created_at
 * @property string $created_by
 */
class TblBmi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_bmi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['height', 'weight', 'user_id', 'created_at', 'created_by'], 'required'],
            [['user_id'], 'integer'],
            [['height', 'weight', 'created_at', 'created_by'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'height' => 'Height',
            'weight' => 'Weight',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }
}
