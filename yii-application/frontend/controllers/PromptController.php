<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Addpost;
use common\models\Codelib;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class PromptController extends Controller
{
  public function beforeAction($action) {

    if (Yii::$app->user->isGuest || !Yii::$app->db->createCommand('SELECT * FROM ded WHERE userid=:id')->bindValues(['id'=>Yii::$app->user->id])->queryOne())
    {
      return $this->redirect(['/site/index']);
    }
      return true;
  }
  public function actionAddme() {
    $model = new Addpost();
      if (Yii::$app->request->post()) {
        if ($model->load(Yii::$app->request->post()) && $model->inject()) {
          return $this->redirect(['/library/' . $model['category']]);
        }
      }
    return $this->render('addme',[
      'model'=>$model,
    ]);
  }
  public function actionDelete($id) {
    if ($red = Codelib::find()->where('author=:uid AND id=:pid',[':uid'=>Yii::$app->user->id,':pid'=>$id])->one())
    {
      if (Yii::$app->db
      ->createCommand('DELETE FROM codelib WHERE author=:uid AND id=:pid')
      ->bindValues([':uid'=>Yii::$app->user->id,':pid'=>$id])
      ->execute()
    ) {
        return $this->redirect(['/library/' . $red['category']]);
      }
    }
  }
}
