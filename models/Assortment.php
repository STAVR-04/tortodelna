<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "assortment".
 *
 * @property integer $id
 * @property integer $categories_id
 * @property string $title
 * @property string $content
 * @property string $new
 * @property integer $pay
 * @property integer $pay_action
 * @property string $img
 * @property string $new_img
 *
 * @property Categories $categories
 */
class Assortment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'assortment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['categories_id'], 'required'],
            [['categories_id', 'pay', 'pay_action'], 'integer'],
            [['content', 'new', 'img', 'new_img'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['categories_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['categories_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'categories_id' => 'Категория',
            'title' => 'Заголовок',
            'content' => 'Описание',
            'new' => 'Новинка',
            'pay' => 'Цена',
            'pay_action' => 'Цена по акции',
            'img' => 'превью',
            'new_img' => 'изображение новинки',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasOne(Categories::className(), ['id' => 'categories_id']);
    }
    public function getSlider()
    {
        return $this->hasMany(Slider::className(), ['assortment_id' => 'id']);
    }
}
