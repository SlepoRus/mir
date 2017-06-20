<?php
namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class Addpost extends Model
{
    public $title;
    public $author;
    public $link;
    public $category;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title','author','link','category'], 'required','message'=>'Поле должно быть заполнено!'],
            [['author','link','category','title'], 'string'],
        ];
    }
    public function Inject() {
      if ($try = Yii::$app->db->createCommand('INSERT INTO codelib VALUES(null,:title,:author,:category,:link,:date)')
      ->bindValues(
        [':title'=>$this->title,
        ':author'=>Yii::$app->user->id,
        ':category'=>$this->category,
        ':link'=>$this->link,
        ':date'=>date('y-m-d')]
      )->execute()) {
        return true;
      } else {
        return false;
      }
    }
}
