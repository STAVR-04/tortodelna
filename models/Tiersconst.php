<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tiersconst".
 *
 * @property integer $id
 * @property string $tier
 *
 * @property Imgconst[] $imgconsts
 */
class Tiersconst extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tiersconst';
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImgconsts()
    {
        return $this->hasMany(Imgconst::className(), ['id_tier' => 'id']);
    }
}
