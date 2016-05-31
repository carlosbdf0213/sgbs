<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_cta_bancaria".
 *
 * @property integer $id
 * @property string $descripcion
 */
class Tipoctabancaria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_cta_bancaria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion'], 'required'],
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
