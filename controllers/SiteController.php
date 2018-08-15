<?php

namespace app\controllers;

use app\models\Assortment;
use app\models\Categories;
use app\models\Imgconst;
use app\models\NumberOfCakes;
use app\models\Size;
use app\models\Tiers;
use app\models\Type;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;
use yii\web\UploadedFile;
use app\models\Posts;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\TestForm;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Connect;
use app\models\User;
use yii\db\ActiveRecord;
use app\models\UserLk;
use app\models\SignupForm;
use app\models\PasswordResetRequestForm;
use app\models\ResetPasswordForm;
use app\models\UploadImage;
use yii\helpers\Inflector;
use app\models\TinkoffMerchantAPI;


class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        $cookies = Yii::$app->request->cookies;
        $cake = json_decode($cookies->get('cake2'), true);
        $this->view->params['count'] = count($cake);
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        return $this->render('index');
    }
//    public function actionAddAdmin() {
//        $model = User::find()->where(['username' => 'admin'])->one();
//        if (empty($model)) {
//            $user = new User();
//            $user->username = 'admin';
//            $user->email = 'admin@mail.ru';
//            $user->setPassword('admin');
//            $user->generateAuthKey();
//            if ($user->save()) {
//                echo 'good';
//            }
//        }
//    }

    /**
     * Login action.
     *
     * @return Response|string
     */

    public function actionLk(){
        return $this->render('lk');
    }
    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */


    public function actionRegistr()
    {

        return $this->render('registr');
    }
	public function actionSignup()
    {	
        $model = new SignupForm();
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model_login = new LoginForm();
        if ($model_login->load(Yii::$app->request->post()) && $model_login->login()) {
            return $this->redirect('/site/lk/');
        }
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    Yii::$app->mailer->compose()
                        ->setTo($user->__get('email'))
                        ->setFrom('aleksandr-alejnikov@yandex.ru')
                        ->setSubject('Подтверждение регистрации на сайте Тортодельня')
                        ->setTextBody('Для подтверждения регистрации пройдите по ссылке http://tort'.Url::to('/site/registr/').'?reg='.$user->__get('auth_key'))
                        ->send();
                    return $this->render('/site/regdon/');
                }
            }
        }
 
        return $this->render('signup', [
            'model' => $model,
            'model_login' => $model_login,
        ]);
    }
	
	
	public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
 
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
				return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }
 
        return $this->render('passwordResetRequestForm', [
            'model' => $model,
        ]);
    }
 
    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
 
        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');
            return $this->redirect(['signup']);
        }
 
        return $this->render('resetPasswordForm', [
            'model' => $model,]);
      }

    public function actionConstructor(){
        if(Yii::$app->request->get('reset')=='true'){
            $size = Size::find()->all();
            $tiers = Tiers::find()->all();
            $number_of_cake = NumberOfCakes::find()->all();
            return $this->render('constructor', [
                'size' => $size,
                'tiers' => $tiers,
                'number_of_cake' => $number_of_cake,
            ]);
        }
        if(!Yii::$app->request->get()) {
            $size = Size::find()->all();
            $tiers = Tiers::find()->all();
            $number_of_cake = NumberOfCakes::find()->all();
            return $this->render('constructor', [
                'size' => $size,
                'tiers' => $tiers,
                'number_of_cake' => $number_of_cake,
            ]);
        }else {
            $get = Yii::$app->request->get();
            $img = Imgconst::find()->joinWith('idTier')->joinWith('idPosition')->joinWith('idType')->where(['position.position' => 1])->andWhere(['type.type' => 'Корж'])->all();
            if ($get['tier']==1 && $get['corn']==2){
                $constructor = [
                    'size' => $get['size'],
                    'tier' => $get['tier'],
                    'number_of_cake' => $get['corn'],
                    'cake' => [
                        1 => [
                            $img[0]->img,
                            '0',
                            $img[0]['idPosition']->position,
                            $img[0]['idType']->type,
                        ],
                        2 => [
                            '',
                            '0',
                            2,
                            'Крем',
                        ],
                        3 => [
                            '',
                            '0',
                            3,
                            'Начинка',
                        ],
                        4 => [
                            '',
                            '0',
                            4,
                            'Корж',
                        ],
                        5 => [
                            '',
                            '0',
                            5,
                            'Крем',
                        ],
                        6 => [
                            '',
                            '0',
                            6,
                            'Начинка',
                        ],
                        7 => [
                            '',
                            '0',
                            7,
                            'Корж',
                        ],
                        8 => [
                            '',
                            '0',
                            8,
                            'Покрытие',
                        ],
                        9 => [
                            '',
                            '0',
                            9,
                            'Украшение',
                        ],

                    ],
                ];
            }elseif ($get['tier']==1 && $get['corn']==1){
                $constructor = [
                    'size' => $get['size'],
                    'tier' => $get['tier'],
                    'number_of_cake' => $get['corn'],
                    'cake' => [
                        1 => [
                            $img[0]->img,
                            '0',
                            $img[0]['idPosition']->position,
                            $img[0]['idType']->type,
                        ],
                        2 => [
                            '',
                            '0',
                            2,
                            'Крем',
                        ],
                        3 => [
                            '',
                            '0',
                            3,
                            'Начинка',
                        ],
                        4 => [
                            '',
                            '0',
                            4,
                            'Корж',
                        ],
                        5 => [
                            '',
                            '0',
                            5,
                            'Покрытие',
                        ],
                        6 => [
                            '',
                            '0',
                            6,
                            'Украшение',
                        ],

                    ],
                ];
            }elseif ($get['tier']==2 && $get['corn']==2) {
                $constructor = [
                    'size' => $get['size'],
                    'tier' => $get['tier'],
                    'number_of_cake' => $get['corn'],
                    'cake' => [
                        1 => [
                            $img[0]->img,
                            '0',
                            $img[0]['idPosition']->position,
                            $img[0]['idType']->type,
                        ],
                        2 => [
                            '',
                            '0',
                            2,
                            'Крем',
                        ],
                        3 => [
                            '',
                            '0',
                            3,
                            'Начинка',
                        ],
                        4 => [
                            '',
                            '0',
                            4,
                            'Корж',
                        ],
                        5 => [
                            '',
                            '0',
                            5,
                            'Крем',
                        ],
                        6 => [
                            '',
                            '0',
                            6,
                            'Начинка',
                        ],
                        7 => [
                            '',
                            '0',
                            7,
                            'Корж',
                        ],
                        8 => [
                            '',
                            '0',
                            8,
                            'Корж',
                        ],
                        9 => [
                            '',
                            '0',
                            9,
                            'Крем',
                        ],
                        10 => [
                            '',
                            '0',
                            10,
                            'Начинка',
                        ],
                        11 => [
                            '',
                            '0',
                            11,
                            'Корж',
                        ],
                        12 => [
                            '',
                            '0',
                            12,
                            'Крем',
                        ],
                        13 => [
                            '',
                            '0',
                            13,
                            'Начинка',
                        ],
                        14 => [
                            '',
                            '0',
                            14,
                            'Корж',
                        ],
                        15 => [
                            '',
                            '0',
                            15,
                            'Покрытие',
                        ],
                        16 => [
                            '',
                            '0',
                            16,
                            'Украшение',
                        ],
                    ],
                ];
            }elseif ($get['tier']==2 && $get['corn']==1) {
                $constructor = [
                    'size' => $get['size'],
                    'tier' => $get['tier'],
                    'number_of_cake' => $get['corn'],
                    'cake' => [
                        1 => [
                            $img[0]->img,
                            '0',
                            $img[0]['idPosition']->position,
                            $img[0]['idType']->type,
                        ],
                        2 => [
                            '',
                            '0',
                            2,
                            'Крем',
                        ],
                        3 => [
                            '',
                            '0',
                            3,
                            'Начинка',
                        ],
                        4 => [
                            '',
                            '0',
                            4,
                            'Корж',
                        ],
                        5 => [
                            '',
                            '0',
                            5,
                            'Корж',
                        ],
                        6 => [
                            '',
                            '0',
                            6,
                            'Крем',
                        ],
                        7 => [
                            '',
                            '0',
                            7,
                            'Начинка',
                        ],
                        8 => [
                            '',
                            '0',
                            8,
                            'Корж',
                        ],
                        9 => [
                            '',
                            '0',
                            9,
                            'Покрытие',
                        ],
                        10 => [
                            '',
                            '0',
                            10,
                            'Украшение',
                        ],
                    ],
                ];
            }
            $cookies = Yii::$app->response->cookies;
            $cookies->add(new \yii\web\Cookie([
                'name' => 'constructor',
                'value' => json_encode($constructor),
            ]));

            return $this->redirect('/site/constructorlist/');
        }
    }
    public function actionConstructorlist(){
        $cookies = Yii::$app->request->cookies;
        $constructor = json_decode($cookies->get('constructor'), true);
        $url = Url::to(['/site/constructorlist/', 'return'=>'true']);
//        echo "<pre>";
//        print_r($constructor);
//        echo "</pre>";
        if($constructor['cake']){
            if(Yii::$app->request->get('back')){
                foreach ($constructor['cake'] as $key=>$value) {
//                    echo "<pre>";
//                    print_r($value);
//                    echo "</pre>";
                    if($key > Yii::$app->request->get('back')) {
                        $constructor['cake'][$key][0]='';
                        $constructor['cake'][$key][1]='0';
                    }elseif ($key == Yii::$app->request->get('back')){
                        $constructor['cake'][$key][1]='0';
                    }
                }
                $cookies = Yii::$app->response->cookies;
                $cookies->add(new \yii\web\Cookie([
                    'name' => 'constructor',
                    'value' => json_encode($constructor),
                ]));
            }
            $tek = 0;
            foreach ($constructor['cake'] as $key=>$value) {
                if($value[1] == 0) {
                    $el = $value;
                    $tek=$key;
                    break;
                }
            }
            if(Yii::$app->request->get('basket')){
                $get = Yii::$app->request->get();
                $cookies = Yii::$app->request->cookies;
                $cake = json_decode($cookies->get('cake2'), true);
                $cake[]=$constructor;
                $cookies = Yii::$app->response->cookies;
                $cookies->add(new \yii\web\Cookie([
                    'name' => 'cake2',
                    'value' => json_encode($cake),
                ]));
                return $this->redirect('/site/constructorlist/?add=true');
            }
            if(Yii::$app->request->get('return')=='true'){

                if($tek>1 && $tek<=16){
                    $constructor['cake'][$tek][0]='';
                    $constructor['cake'][$tek][1]='0';
                    $constructor['cake'][$tek-1][1]='0';
                    $cookies = Yii::$app->response->cookies;
                    $cookies->add(new \yii\web\Cookie([
                        'name' => 'constructor',
                        'value' => json_encode($constructor),
                    ]));

                }elseif ($tek==1){
                    return $this->redirect('/site/constructor/');
                }
            }
            $tek = 0;
            foreach ($constructor['cake'] as $key=>$value) {
                if($value[1] == 0) {
                    $el = $value;
                    $tek=$key;
                    break;
                }
            }
            if (Yii::$app->request->get('next')=='ok'){
                $constructor['cake'][$el[2]][1]='1';
                $img = Imgconst::find()->joinWith('idTier')->joinWith('idPosition')->joinWith('idType')
                    ->where(['position.position' => $el[2]+1])
                    ->andWhere(['type.type' => $constructor['cake'][$el[2]+1][3]])->all();
                $constructor['cake'][$el[2]+1] = [
                    0 => $img[0]->img,
                    1 => '0',
                    2 => $img[0]['idPosition']->position,
                    3 => $img[0]['idType']->type,
                ];
//                    echo "<pre>";
//                    print_r($constructor['cake']);
//                    echo "</pre>";
                $cookies = Yii::$app->response->cookies;
                $cookies->add(new \yii\web\Cookie([
                    'name' => 'constructor',
                    'value' => json_encode($constructor),
                ]));
                $korg = 0;
                $krem = 0;
                $nach = 0;
                $pokr = 0;
                $ykr = 0;
                foreach ($constructor['cake'] as $con){
                    $izo = Imgconst::find()->where(['img'=> $con[0]])->one();
                    if ($izo->id_type == '1'){
                        $korg += $izo->price;
                    }elseif ($izo->id_type == '2'){
                        $krem += $izo->price;
                    }elseif ($izo->id_type == '3'){
                        $nach += $izo->price;
                    }elseif ($izo->id_type == '4'){
                        $pokr += $izo->price;
                    }elseif ($izo->id_type == '5'){
                        $ykr += $izo->price;
                    }
                }
                return $this->render('constructorlist',[
                    'img' => $img,
                    'constructor' => $constructor,
                    'i' => $img[0]->id,
                    'url'=> $url,
                    'tek' => $tek+1,
                    'korg' => $korg,
                    'krem' => $krem,
                    'nach' => $nach,
                    'pokr' => $pokr,
                    'ykr' => $ykr,
                ]);
            }
            if($el[1] == '0'){
                $img = Imgconst::find()->joinWith('idTier')->joinWith('idPosition')->joinWith('idType')->where(['position.position' => $el[2]])->andWhere(['type.type' => $el[3]])->all();
                if (Yii::$app->request->get('id')){
                    $img_tek = Imgconst::find()->joinWith('idTier')->joinWith('idPosition')->joinWith('idType')
                        ->where(['imgconst.id' => Yii::$app->request->get('id')])
                        ->andWhere(['position.position' => $el[2]])
                        ->andWhere(['type.type' => $el[3]])->one();
                    $constructor['cake'][$img_tek['idPosition']->position] = [
                        0 => $img_tek->img,
                        1 => '0',
                        2 => $img_tek['idPosition']->position,
                        3 => $img_tek['idType']->type,
                    ];
                    $cookies = Yii::$app->response->cookies;
                    $cookies->add(new \yii\web\Cookie([
                        'name' => 'constructor',
                        'value' => json_encode($constructor),
                    ]));
                    $korg = 0;
                    $krem = 0;
                    $nach = 0;
                    $pokr = 0;
                    $ykr = 0;

                    foreach ($constructor['cake'] as $con){
                        $izo = Imgconst::find()->where(['img'=> $con[0]])->one();

                        if ($izo->id_type == '1'){
                            $korg += $izo->price;
                        }elseif ($izo->id_type == '2'){
                            $krem += $izo->price;
                        }elseif ($izo->id_type == '3'){
                            $nach += $izo->price;
                        }elseif ($izo->id_type == '4'){
                            $pokr += $izo->price;
                        }elseif ($izo->id_type == '5'){
                            $ykr += $izo->price;
                        }
                    }
                    return $this->render('constructorlist',[
                        'img' => $img,
                        'constructor' => $constructor,
                        'i' => $img_tek->id,
                        'url'=> $url,
                        'tek' => $tek,
                        'korg' => $korg,
                        'krem' => $krem,
                        'nach' => $nach,
                        'pokr' => $pokr,
                        'ykr' => $ykr,
                    ]);
                }
            }
            $korg = 0;
            $krem = 0;
            $nach = 0;
            $pokr = 0;
            $ykr = 0;

            foreach ($constructor['cake'] as $con){
                    $izo = Imgconst::find()->where(['img' => $con[0]])->one();
                    if ($izo->id_type == '1') {
                        $korg += $izo->price;
                    } elseif ($izo->id_type == '2') {
                        $krem += $izo->price;
                    } elseif ($izo->id_type == '3') {
                        $nach += $izo->price;
                    } elseif ($izo->id_type == '4') {
                        $pokr += $izo->price;
                    } elseif ($izo->id_type == '5') {
                        $ykr += $izo->price;
                    }
            }
            return $this->render('constructorlist',[
                'img' => $img,
                'constructor' => $constructor,
                'i' => $img[0]->id,
                'url'=> $url,
                'tek' => $tek,
                'korg' => $korg,
                'krem' => $krem,
                'nach' => $nach,
                'pokr' => $pokr,
                'ykr' => $ykr,
            ]);
        }
//        print_r($constructor);

    }

    public function actionSavecake(){
        $get = Yii::$app->request->get();
        $cookies = Yii::$app->request->cookies;
        $cake = json_decode($cookies->get('cake2'), true);
        if(!isset($cake)){
            $cake[] = ['id'=>$get['id'],
                'kol'=>1];
        }else{
            $a=true;
            foreach ($cake as $key=>$value){
                if($value['id']==$get['id']){
                    $cake[$key]['kol']=1+$value['kol'];
                    $a=false;
            }
            }
            if($a){
                $cake[] = ['id'=>$get['id'],
                    'kol'=>1];
            }
        }



        $cookies = Yii::$app->response->cookies;
        $cookies->add(new \yii\web\Cookie([
            'name' => 'cake2',
            'value' => json_encode($cake),
        ]));
        return $this->redirect(Url::to('/site/assortment/?id_type=1'));
    }

    public function actionSavecakefull(){
        $get = Yii::$app->request->get();
        $cookies = Yii::$app->request->cookies;
        $cake = json_decode($cookies->get('cake2'), true);
        if(!isset($cake)){
            $cake[] = ['id'=>$get['id'],
                'kol'=>$get['kol']];
        }else{
            $a=true;
            foreach ($cake as $key=>$value){
                if($value['id']==$get['id']){
                    $cake[$key]['kol']=$get['kol']+$value['kol'];
                    $a=false;
                }
            }
            if($a){
                $cake[] = ['id'=>$get['id'],
                    'kol'=>$get['kol']];
            }
        }



        $cookies = Yii::$app->response->cookies;
        $cookies->add(new \yii\web\Cookie([
            'name' => 'cake2',
            'value' => json_encode($cake),
        ]));
        return $this->redirect(Url::to('/site/product/?id='.$get['id']));
    }

    public function actionBasketdelete(){
        $get = Yii::$app->request->post();
        $cookies = Yii::$app->request->cookies;
        $cake = json_decode($cookies->get('cake2'), true);
        unset($cake[$get['id']]);
        $cookies = Yii::$app->response->cookies;
        $cookies->add(new \yii\web\Cookie([
            'name' => 'cake2',
            'value' => json_encode($cake),
        ]));
        return true;
    }

    public function actionAssortment(){



        $new = Assortment::find()->where(['new'=> 1])->orderBy('RAND()')->one();
        $id_type = Yii::$app->request->get('id_type');
        $type = Categories::find()->orderBy('id', SORT_DESC)->all();
        $model = Assortment::find()->where(['categories_id'=>$id_type])->all();
        if (Yii::$app->request->get('action')){
            $model = Assortment::find()->where(['categories_id'=>$id_type])->andWhere(['!=','pay_action',''])->all();
        }

        return $this->render('assortment', [
            'model' => $model,
            'type' => $type,
            'new' => $new,
        ]);
    }
    public function actionProduct(){

        if($id = Yii::$app->request->get('id')){
            $model = Assortment::find()->joinWith('slider')->where(['assortment.id'=>$id])->one();
//            echo "<pre>";
//            print_r($model);
//            echo "</pre>";
            return $this->render('product',[
                'model' => $model,
            ]);
        }

    }

    public function actionBasket(){
        $cookies = Yii::$app->request->cookies;
        $cake = json_decode($cookies->get('cake2'), true);
//        print_r($cake);

        if (!isset($cake[0])){
//            print_r($cake);
            $cookies = Yii::$app->response->cookies;
            $cake=[];
            $cookies->add(new \yii\web\Cookie([
                'name' => 'cake2',
                'value' => json_encode($cake),
            ]));
        }

        return $this->render('basket', [
            'cake' => $cake,
        ]);
    }

    public function actionTinkoffpay(){

            $user_id = Yii::$app->user->identity->getId();
            $user = User::find()->where(['id'=>$user_id])->one();
            $get = Yii::$app->request->get();
            $tinkof = new TinkoffMerchantAPI(
                '1534305565593DEMO',
                'kjgjvhc421phcrrf',
                'https://securepay.tinkoff.ru/rest/');
            $params = array(
                'OrderId' => $get['order'],
                'Amount' => $get['amount'].'00',
                'Description' => $get['description'].' Количество:'.$get['count'].' Телефон:'.$get['phone'].' Имя: '.$get['name'],
                'DATA' => 'Email='.$get['email'],
                //'Recurrent' => 'Y',
//                'CustomerKey' => '5',
                //'Token' => '1',
            );
            $tinkof->init($params);
            $user->paymentid = $tinkof->paymentId;
            $user->sum = $get['amount'];
            $user->type = "Оп";
            $user->save();
            return $tinkof->paymentUrl;

            $tinkof->init($params);
            return $tinkof->paymentUrl;

    }
    public function actionPaysuccess(){
        $tinkof = new TinkoffMerchantAPI(
            '1534305565593DEMO',
            'kjgjvhc421phcrrf',
            'https://securepay.tinkoff.ru/rest/');
        $user_id = Yii::$app->user->identity->getId();
        $user = User::find()->where(['id'=>$user_id])->one();
        $params = array(
            'PaymentId' => $user->paymentid,
        );
        $tinkof->getState($params);
        $pay_k = Pay::find()->where(['paymentid'=>$user->paymentid])->one();
        if($tinkof->status == 'CONFIRMED' && $pay_k->id_pay == ''){
            $pay = new Pay();
            $pay->pay = $user->sum;
            $pay->user_id = $user->id;
            $pay->type = $user->type;
            $pay->paymentid = $user->paymentid;
            $pay->save();
            if($user->type == 'Рег'){
                $user->payreg = 'Рег';
                $user->save();
            }
        }
        return $this->render('paysuccess', compact('tinkof'));
    }

}