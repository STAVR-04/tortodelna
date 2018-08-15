<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tiers".
 *
 * @property integer $id
 * @property string $tier
 */
class Tiers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tiers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tier'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tier' => 'Tier',
        ];
    }
}
