<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paises".
 *
 * @property integer $id
 * @property string $denominacion
 * @property string $descripcion
 */
class Paises extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'paises';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'denominacion', 'descripcion'], 'required'],
            [['id'], 'integer'],
            [['denominacion', 'descripcion'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'denominacion' => 'Denominación',
            'descripcion' => 'Descripción',
        ];
    }
}
