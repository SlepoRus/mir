<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
</header>
<div>
  <div class="site-login" style="padding-bottom:20px;">
      <h1 style="text-align:center;">Добавить в библиотеку</h1>
      <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
      <label>Название публикации</label>
      <?= $form->field($model, 'title')->textInput(['autofocus' => true])->label(false) ?>
      <label>Ваш логин</label>
      <?= $form->field($model, 'author')->textInput(['value'=>Yii::$app->db
      ->createCommand('SELECT username FROM user WHERE id=:id')
      ->bindValues([':id'=>Yii::$app->user->id])
      ->queryOne()['username'],'disabled'=>true])
      ->label(false) ?>
      <label>Категория</label>
      <?= $form->field($model, 'category')->dropDownList([
          'vr' => 'Виртуальная реальность',
          'ar' => 'Дополненная реальность',
          'mr' => 'Смешенная реальность',
      ])->label(false); ?>
      <label>Ссылка</label>
      <?= $form->field($model, 'link')->textInput()->label(false) ?>
      <div class="form-group">
          <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
      </div>
  <?php ActiveForm::end(); ?>
  </div>
</div>
