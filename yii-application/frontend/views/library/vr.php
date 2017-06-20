<?
use yii\helpers\Url;
?>
<div style="width:500px;margin:auto;margin-top:30px;padding:10px">
  <div style="border:1px solid white; padding:30px;width:400px;margin:auto;margin:auto;text-align:center;">
    <span style="text-align:center;color:white;font-size:28px;font-style:normal;">Библиотека кода VR</span>
  </div>
</div>
</header>
<div style="padding:50px; border:1px solid black; ">
  <table class="table table-hover">
    <thead>
      <th style="width:100px;">
        Номер
      </th>
      <th>
        Название
      </th>
      <th>
        Репозиторий
      </th>
      <th style="width:200px;">
        Автор
      </th>
      <th style="width:100px;">
        Дата
      </th>
    </thead>
    <tbody>
      <?foreach ($model as $key): ?>
        <tr style="cursor:pointer">
          <td onclick="window.location.href='<?=$key['link']?>'; return false"><?=$key['id']?></td>
          <td onclick="window.location.href='<?=$key['link']?>'; return false"><?=$key['title']?></td>
          <td onclick="window.location.href='<?=$key['link']?>'; return false"><?=$key['link']?></td>
          <td onclick="window.location.href='<?=$key['link']?>'; return false"><?=Yii::$app->db->createCommand('SELECT username FROM user WHERE id=:id')->bindValues(['id'=>Yii::$app->user->id])->queryOne()['username']?></td>
          <td onclick="window.location.href='<?=$key['link']?>'; return false"><?=$key['date']?></td>
          <?if ($key['author']==Yii::$app->user->id):?>
          <td>
            <form method="post" action="<?=Url::toRoute(['prompt/delete','id'=>$key['id']])?>"  >
              <button>
                <span>
                <img width='20px' src="/image/delete.png">
              </span>
              </button>
            </form>
          </td>
          <?endif?>
        </tr>
      <?endforeach;?>
    </tbody>
  </table>
</div>
<style>
button {
    display: block;
    margin: 0;
    padding: 0;
    background: none;
    position: relative;
    border:0;
  }
</style>
