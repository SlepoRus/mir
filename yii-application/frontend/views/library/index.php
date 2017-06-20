<?
use yii\helpers\Url;
?>
<div style="width:500px;margin:auto;margin-top:30px;padding:10px">
  <div style="border:1px solid white; padding:30px;width:400px;margin:auto;margin:auto;text-align:center;">
    <span style="text-align:center;color:white;font-size:28px;font-style:normal;">Библиотека кода</span>
  </div>
</div>
</header>
<div style="border-top:4px solid gray;">
  <div style="text-align:center;padding:20px;border:1px solid black;margin:10px;">
    <label style="font-size:26px;">Мы предоставляем открытый код каждому участнику в развитии виртуальной реальности, а так же гостю нашего сайта.</label><br>
  </div>
</div>
<div class="ncc" style="text-align:center;">
  <div class="main-btn">
    Категории:
  </div>
    <div class="show-lib">
      <a href="<?=Url::toRoute('library/vr')?>">
        <span style="font-size:50px;"> VR </span>
        <div class="mytext">
          <span> Дополненная реальность — воспринимаемая смешанная реальность, создаваемая с использованием «дополненных» с помощью компьютера элементов воспринимаемой реальности </span>
        </div>
        <div class="my-btn">
          <span>Виртуальная реальность</span>
        </div>
      </a>
    </div>
    <div class="show-lib">
      <a href="<?=Url::toRoute('library/ar')?>">
        <span style="font-size:50px;"> AR </span>
        <div class="mytext">
          <span> Дополненная реальность — воспринимаемая смешанная реальность, создаваемая с использованием «дополненных» с помощью компьютера элементов воспринимаемой реальности </span>
        </div>
        <div class="my-btn">
          <span>Дополненная реальность</span>
        </div>
      </a>
    </div>
    <div class="show-lib">
      <a href="<?=Url::toRoute('library/mr')?>">
        <span style="font-size:50px;"> MR </span>
        <div class="mytext">
          <span> Является следствием объединения реального и виртуальных миров для созданий новых окружений и визуализаций, где физический и цифровой объекты сосуществуют и взаимодействуют в реальном времени. </span>
        </div>
        <div class="my-btn">
          <span>Смешанная реальность</span>
        </div>
      </a>
    </div>
</div>
<style>
.land{
  height:240px!important;
}
</style>
