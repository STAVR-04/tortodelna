<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property integer $id
 * @property integer $assortment_id
 * @property string $content
 *
 * @property Assortment $assortment
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['assortment_id'], 'required'],
            [['assortment_id'], 'integer'],
            [['content'], 'string'],
            [['assortment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Assortment::className(), 'targetAttribute' => ['assortment_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'assortment_id' => 'Assortment ID',
            'content' => 'Content',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssortment()
    {
        return $this->hasOne(Assortment::className(), ['id' => 'assortment_id']);
    }
}
