<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class DocumentationForm extends Model{

    public $tittle;
    public $author;
    public $imageFile;

    public function rules(){
        return [
            [['tittle','author'], 'required'],
            [['imageFile'], 'file'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}

?>
