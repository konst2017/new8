<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "film".
 *
 * @property int $id
 * @property string|null $title
 * @property int|null $year
 * @property string|null $teg
 */
class Film extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'film';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year'], 'integer'],
            [['title', 'teg'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'year' => 'Year',
            'teg' => 'Teg',
        ];
    }
}
