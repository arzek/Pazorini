<?php
namespace frontend\controllers;

use app\models\Region;
use app\models\Services;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use app\models\Comment;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionBusiness()
    {
        $comment = Comment::find()->where(['status' => 2,'type' => null])->all();

        return $this->render('business',['comment' => $comment]);
    }
    public function actionOffers()
    {

        $services = Services::find()->where(['status' => 2])->all();

        return $this->render('offers',['services' => $services]);
    }
    public function actionOffer($id)
    {
        $service =Services::findOne($id);
        $comment = Comment::find()->where(['status' => 2,'type' => $id])->all();
        return $this->render('offer',['service' => $service, 'comment' => $comment]);
    }
    public function actionContacts()
    {
        return $this->render('contacts');
    }
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionFinal($id)
    {
        $service =Services::findOne($id);
        $region = Region::getArray();
        return $this->render('final',['service' => $service,'region' => $region]);
    }
    public function actionError()
    {
        return $this->render('error');
    }
    public function actionSuccess()
    {
        return $this->render('success');
    }
}
