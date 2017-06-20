<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Авторизация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login" style="padding-bottom:0px;">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Пожалуйста, заполните следующие поля:</p>

    <div class="row" style="height:410px;">
        <div class="col-md-8">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
          <label>Ваш логин</label>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label(false) ?>
          <label>Ваш пароль</label>
                <?= $form->field($model, 'password')->passwordInput()->label(false) ?>
                <?= $form->field($model, 'rememberMe')->checkbox()->label('Запомнить меня') ?>

                <div style="color:#999;margin:1em 0">
                    Если вы забыли пароль, вы можете его <?= Html::a('сбросить', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Вход', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
        <div class=" cc" style="float:right;">
          <img  src='/image/unnamed.png' style="margin-top:-50px;"><br>
        </div>
    </div>
</div>

</header>
