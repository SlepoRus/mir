<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
AppAsset::register($this);
if (!Yii::$app->user->isGuest)
$ican = Yii::$app->db->createCommand('SELECT * FROM ded WHERE userid=:id')->bindValues(['id'=>Yii::$app->user->id])->queryOne();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header class="land">
<nav class="navbar navbar-default" style="border-bottom:8px solid teal;margin-bottom:0px;box-shadow:3px 2px 5px 5px rgba(10,10,10,0.1)">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=Url::toRoute('site/index')?>">
        <img src="/image/logo_mirea.png" width="45px" class="img-responsive" style="margin-top:-13px;">
      </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" >
        <li><a style="color:white;" href="#">Гайды</a></li>
        <li class="dropdown">
          <a style="color:white;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Библиотека<span class="caret"></span></a>
          <ul class="dropdown-menu" >
            <li><a href="<?=Url::toRoute('library/index')?>">Библиотека</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?=Url::toRoute('library/vr')?>">VR</a></li>
            <li><a href="<?=Url::toRoute('library/ar')?>">AR</a></li>
            <li><a href="<?=Url::toRoute('library/mr')?>">MR</a></li>
            <li><a href="#">Избранное</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Уникальное</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <? if(Yii::$app->user->isGuest): ?>
        <li><a style="color:white;" href="<?=Url::toRoute('site/login')?>">Вход</a></li>
        <li><a style="color:white;" href="<?=Url::toRoute('site/signup')?>">Регистрация</a></li>
        <? else:?>
          <?if ($ican):?>
          <li><a style="color:white;" href="<?=Url::toRoute('prompt/addme')?>">Добавить свои наработки</a></li>
          <?endif;?>
        <li style="padding-top:15px;padding-right:10px;padding-left:10px;"><span style="color:white;">Вы вошли как <?=
        Yii::$app->db
        ->createCommand('SELECT username FROM user WHERE id=:id')
        ->bindValues([':id'=>Yii::$app->user->id])
        ->queryOne()['username']?></span></li>
        <li><a style="color:white;" href="<?=Url::toRoute('site/logout')?>">Выход</a></li>
        <?endif;?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

        <?= $content ?>
<div class = "container">
	<div class="row">
		<div class="points">
			<div class="col-md-4">
				<div class="ability">
					<img src="/image/code-icon.png" class="img-responsive icon">
					<span>Открытый код</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, ipsum eget fringilla malesuada, massa quam fringilla risus, et semper dolor ante ac lectus. Proin ut magna tellus. <p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="ability">
					<img src="/image/forum-icon.png" class="img-responsive icon">
					<span>Форум</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, ipsum eget fringilla malesuada, massa quam fringilla risus, et semper dolor ante ac lectus. Proin ut magna tellus.<p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="ability">
					<img src="/image/guide-icon.png" class="img-responsive icon">
					<span>Гайды</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, ipsum eget fringilla malesuada, massa quam fringilla risus, et semper dolor ante ac lectus. Proin ut magna tellus. <p>
					</div>
			</div>
		</div>
	</div>
</div>
<footer style=>
  <div class="row">
  	<div class="footer">
  		<h3>мирэа 2016</h3>
  	</div>
  </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
