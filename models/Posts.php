<?php
/**
 * Created by PhpStorm.
 * User: STAVR
 * Date: 23.10.2017
 * Time: 12:15
 */

namespace app\models;


use yii\db\ActiveRecord;

class Posts extends ActiveRecord
{

    public static function tableName(){
        return 'post';
    }

    public function attributeLabels(){

        return [

            'id'=>'id',

            'user_id' => 'user_id',

            'user_name' => 'Имя пользователя',

            'title' => 'Заголовок',

            'text' => 'Текст',

            'img' => 'Картинка',

            'status' => 'Статус',

        ];

    }

    public function rules(){

        return [

            [['title','text'],'required', 'message' => 'Поле обязаельно для заполнения'],
            [['img'],'file', 'extensions' =>'png, jpg'],

        ];

    }



}
