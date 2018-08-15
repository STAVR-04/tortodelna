<?php 
namespace app\models;
use yii\db\ActiveRecord;

class UserLk extends ActiveRecord{

	 public static function tableName(){
		return 'user';
	}
	 
	
	 public function attributeLabels(){
		 return [
			'username'=>'Имя',
			'email' => 'мыло',				
		 ];
	 }
	  public function rules(){
		 
		 return [
		 ['username','required', 'message' => 'Поле обязаельно для заполнения'],
		 ['email','required', 'message' => 'Поле обязаельно для заполнения'],
		 ['email','email', 'message' => 'Введенный адрес не корректен'],
		 ['username', 'string' , 'max' => 10],
		 ['username','trim'],
		 ['email','trim'],
		 ];
		 
	 }
	 
}


?>