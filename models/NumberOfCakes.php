<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "number_of_cakes".
 *
 * @property integer $id
 * @property string $number
 */
class NumberOfCakes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'number_of_cakes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Number',
        ];
    }
}
