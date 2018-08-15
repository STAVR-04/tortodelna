<?php 
namespace app\models;
use yii\db\ActiveRecord;

class TestForm extends ActiveRecord{
	
	 public static function tableName(){
		
		return 'users';
		
	}
	 
	 public function attributeLabels(){
		 return [
			'name'=>'Имя',
			'email' => 'мыло',
			'text' => 'Текст',
		 ];
	 }
	 
	  public function rules(){
		 
		 return [
		 ['name','required', 'message' => 'Поле обязаельно для заполнения'],
		 ['email','required', 'message' => 'Поле обязаельно для заполнения'],
		 ['text','required', 'message' => 'Поле обязаельно для заполнения'],
		 ['email','email', 'message' => 'Введенный адрес не корректен'],
		 ['name', 'string' , 'max' => 10],
		 ['text', 'string' , 'max' => 100],
		 ['name','trim'],
		 ['email','trim'],
		 ['text','trim'],
		 ];
		 
	 }
	 
}


?>