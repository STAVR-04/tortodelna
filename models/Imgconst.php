<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "imgconst".
 *
 * @property integer $id
 * @property string $img
 * @property integer $id_type
 * @property integer $id_tier
 * @property integer $id_position
 *
 * @property Position $idPosition
 * @property Tiersconst $idTier
 * @property Type $idType
 */
class Imgconst extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'imgconst';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['img', 'title'], 'string'],
            [['id_type', 'id_tier', 'id_position', 'title'], 'required'],
            [['id_type', 'id_tier', 'id_position'], 'integer'],
            [['id_position'], 'exist', 'skipOnError' => true, 'targetClass' => Position::className(), 'targetAttribute' => ['id_position' => 'id']],
            [['id_tier'], 'exist', 'skipOnError' => true, 'targetClass' => Tiersconst::className(), 'targetAttribute' => ['id_tier' => 'id']],
            [['id_type'], 'exist', 'skipOnError' => true, 'targetClass' => Type::className(), 'targetAttribute' => ['id_type' => 'id']],
            ['price', 'integer'],
            ['pokr_type', 'trim'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Изображение',
            'id_type' => 'Тип',
            'id_tier' => 'Ярус',
            'id_position' => 'Позиция',
            'pokr_type' => 'Тип покрытия',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPosition()
    {
        return $this->hasOne(Position::className(), ['id' => 'id_position']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTier()
    {
        return $this->hasOne(Tiersconst::className(), ['id' => 'id_tier']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdType()
    {
        return $this->hasOne(Type::className(), ['id' => 'id_type']);
    }
}
