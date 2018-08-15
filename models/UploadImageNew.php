<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadImageNew extends Model{

 public $img2;
    public function attributeLabels()
    {
        return [
            'img2' => 'Изображение записи',
        ];
    }
     public function rules(){
     return[
            [['img2'], 'file', 'extensions' => 'png, jpg, svg'],
        ];
 }

 public function upload(){
if($this->validate() && $this->img2!==null){
    $this->img2->name = rand(1,9999)."_".date("U").".".$this->img2->extension;
    $this->img2->saveAs("uploads/{$this->img2->name}");
return true;
}else{
return false;
}
}

}