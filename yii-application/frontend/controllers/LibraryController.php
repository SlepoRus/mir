<?php
namespace frontend\controllers;

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

/**
 * Site controller
 */
class LibraryController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        $action = Yii::$app->controller->action->id;
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
    public function beforeAction($action) {
      if (Yii::$app->user->isGuest) {
        return $this->redirect(['/site/login']);
      }
        return true;
    }
    public function actionIndex() {
      return $this->render('index');
    }
    public function actionAr() {
      $model = Yii::$app->db->createCommand('SELECT * FROM codelib WHERE category="ar"')->queryAll();
      return $this->render('ar',[
        'model'=>$model,
      ]);
    }
    public function actionMr() {
      $model = Yii::$app->db->createCommand('SELECT * FROM codelib WHERE category="mr"')->queryAll();
      return $this->render('mr',[
        'model'=>$model,
      ]);
    }
    public function actionVr() {
      $model = Yii::$app->db->createCommand('SELECT * FROM codelib WHERE category="vr"')->queryAll();
      return $this->render('vr',[
        'model'=>$model,
      ]);
    }
  }
