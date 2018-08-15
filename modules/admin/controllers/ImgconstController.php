<?php

namespace app\modules\admin\controllers;

use app\models\Position;
use app\models\Tiersconst;
use app\models\Type;
use app\models\UploadImage;
use Yii;
use app\models\Imgconst;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;

/**
 * ImgconstController implements the CRUD actions for Imgconst model.
 */
class ImgconstController extends Controller
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
     * Lists all Imgconst models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Imgconst::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Imgconst model.
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
     * Creates a new Imgconst model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Imgconst();
        $img = new UploadImage();
        $types = Type::find()->asArray()->all();
        $typeList = ArrayHelper::map($types, 'id', 'type');
        $tiersconst = Tiersconst::find()->asArray()->all();
        $tiersconstList = ArrayHelper::map($tiersconst,'id', 'tier');
        $position = Position::find()->asArray()->all();
        $positionList = ArrayHelper::map($position,'id', 'position');
        if ($model->load(Yii::$app->request->post())) {
            $img->img = UploadedFile::getInstance($img,'img');
            if($img->img!==null) {
                $img->upload();
                $model->img = '/uploads/' . $img->img->name;
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'img' => $img,
                'typeList' => $typeList,
                'tiersconstList' => $tiersconstList,
                'positionList' => $positionList,
            ]);
        }
    }

    /**
     * Updates an existing Imgconst model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $img = new UploadImage();
        $types = Type::find()->asArray()->all();
        $typeList = ArrayHelper::map($types, 'id', 'type');
        $tiersconst = Tiersconst::find()->asArray()->all();
        $tiersconstList = ArrayHelper::map($tiersconst,'id', 'tier');
        $position = Position::find()->asArray()->all();
        $positionList = ArrayHelper::map($position,'id', 'position');
        if ($model->load(Yii::$app->request->post())) {
            $img->img = UploadedFile::getInstance($img,'img');
            if($img->img!==null) {
                $img->upload();
                $model->img = '/uploads/' . $img->img->name;
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'img' => $img,
                'typeList' => $typeList,
                'tiersconstList' => $tiersconstList,
                'positionList' => $positionList,
            ]);
        }
    }

    /**
     * Deletes an existing Imgconst model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Imgconst model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Imgconst the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Imgconst::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
