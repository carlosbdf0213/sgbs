<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_manten".
 *
 * @property integer $id
 * @property string $tipo
 * @property string $descripcion
 *
 * @property Camiones[] $camiones
 * @property Mantenimientos[] $mantenimientos
 */
class Tipomanten extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_manten';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipo', 'descripcion'], 'required'],
            [['tipo'], 'string'],
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
            'tipo' => 'Tipo',
            'descripcion' => 'Descripción',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCamiones()
    {
        return $this->hasMany(Camiones::className(), ['id_tipo_ult_manten' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMantenimientos()
    {
        return $this->hasMany(Mantenimientos::className(), ['id_tipo_manten' => 'id']);
    }
}
