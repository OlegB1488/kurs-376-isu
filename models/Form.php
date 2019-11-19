<?php

namespace app\models;

use Yii;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\wigets\ActiveField;

/**
 * This is the model class for table "form".
 *
 * @property int $id
 * @property string $name1
 * @property string $name2
 * @property int $score
 * @property string $description
 */
class Form extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'form';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'score', 'description'], 'required'],
            [['name', 'surname', 'description'], 'string'],
            [['score'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'score' => 'Средний балл',
            'description' => 'Коментарий',
        ];
    }
}
