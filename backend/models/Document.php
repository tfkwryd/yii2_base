<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%Document}}".
 *
 * @property int $id
 * @property string $tittle
 * @property string $author
 * @property string $file
 */
class Document extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Document}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tittle', 'author', 'file'], 'required'],
            [['file'], 'file', 'extensions'=>'jpg, gif, png'],
            [['tittle', 'author'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tittle' => 'Tittle',
            'author' => 'Author',
            'file' => 'File',
        ];
    }
}
