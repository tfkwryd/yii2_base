<?php

namespace app\models;

class Documentations extends \yii\base\Model {

    public $tittle;
    public $author;

    public function rules(){
        return [
            [['tittle','author'], 'required'],
        ];
    }
}

?>
