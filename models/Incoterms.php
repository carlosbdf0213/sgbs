<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "incoterms".
 *
 * @property string $id
 * @property string $descripcion
 */
class Incoterms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'incoterms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'descripcion'], 'required'],
            [['id'], 'string', 'max' => 3],
            [['descripcion'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descripcion' => 'Descripción',
        ];
    }
}
