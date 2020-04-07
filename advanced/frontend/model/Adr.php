<?php

namespace frontend\model;

use Yii;

/**
 * This is the model class for table "adr".
 *
 * @property int $num
 * @property string $http
 */
class Adr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['http'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'num' => 'Num',
            'http' => 'Http',
        ];
    }
}
