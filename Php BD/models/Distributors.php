<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "distributors".
 *
 * @property int $did
 * @property string|null $name
 */
class Distributors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'distributors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['did'], 'required'],
            [['did'], 'default', 'value' => null],
            [['did'], 'integer'],
            [['name'], 'string', 'max' => 40],
            [['did'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'did' => 'Did',
            'name' => 'Name',
        ];
    }
}
