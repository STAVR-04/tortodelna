<?php

namespace app\modules\admin\controllers;

use app\models\Categories;
use app\models\Slider;
use app\models\UploadImage;
use app\models\UploadImageNew;
use app\models\UploadSlider;
use Yii;
use app\models\Assortment;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\Url;

/**
 * AssortmentController implements the CRUD actions for Assortment model.
 */
class AssortmentController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Assortment models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Assortment::find()->orderBy(['id'=>SORT_DESC]),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Assortment model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Assortment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Assortment();
        $img = new UploadImage();
        $new_img = new UploadImageNew();
        $slider = new UploadSlider();
        $categories = Categories::find()->orderBy(['id' => SORT_ASC])->all();
        $categories = ArrayHelper::map($categories,'id','name');
        if ($model->load(Yii::$app->request->post())) {
            $img->img = UploadedFile::getInstance($img,'img');
            $new_img->img2 = UploadedFile::getInstance($new_img,'img2');
            $slider->img = UploadedFile::getInstances($slider,'img');
            if($img->img!==null) {
                $img->upload();
                $model->img = '/uploads/' . $img->img->name;
            }
            if($new_img->img2!==null) {
                $new_img->upload();
                $model->new_img = '/uploads/' . $new_img->img2->name;
            }
            $slider->upload();
            $model->save();
            foreach ($slider->img as $item) {
                $sl = new Slider();
                $sl->content ='/uploads/'. $item->name;
                $sl->assortment_id = $model->id;
                $sl->save();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'categories' => $categories,
                'img' => $img,
                'new_img' => $new_img,
                'slider' => $slider,
            ]);
        }
    }

    /**
     * Updates an existing Assortment model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $img = new UploadImage();
        $new_img = new UploadImageNew();
        $slider = new UploadSlider();
        $slider_update = Slider::find()->where(['assortment_id'=>$model->id])->all();
        $categories = Categories::find()->all();
        $categories = ArrayHelper::map($categories,'id','name');
        if ($model->load(Yii::$app->request->post())) {
            $img->img = UploadedFile::getInstance($img,'img');
            $new_img->img2 = UploadedFile::getInstance($new_img,'img2');
            $slider->img = UploadedFile::getInstances($slider,'img');
            if($img->img!==null) {
                $img->upload();
                $model->img = '/uploads/' . $img->img->name;
            }
            if($new_img->img2!==null) {
                $new_img->upload();
                $model->new_img = '/uploads/' . $new_img->img2->name;
            }
            $slider->upload();
            $model->save();
            foreach ($slider->img as $item) {
                $sl = new Slider();
                $sl->content ='/uploads/'. $item->name;
                $sl->assortment_id = $model->id;
                $sl->save();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'categories' => $categories,
                'img' => $img,
                'new_img' => $new_img,
                'slider' => $slider,
                'slider_update' => $slider_update,
            ]);
        }
    }

    /**
     * Deletes an existing Assortment model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionAjaxsliderdelete(){
        if(Yii::$app->request->isAjax){
            $post = Yii::$app->request->post();
            $slider = Slider::find()->where(['id'=>substr($post['id'],6)])->one();
            $s = explode("/", $slider->content);
            Yii::setAlias('@root', realpath(dirname(__FILE__)));
            unlink('E:\WebServer\OSPanel\domains\tort\web\uploads\\'.$s[3]);
            Slider::deleteAll(['id'=>substr($post['id'],6)]);
            return true;
        }

    }
    /**
     * Finds the Assortment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Assortment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Assortment::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
