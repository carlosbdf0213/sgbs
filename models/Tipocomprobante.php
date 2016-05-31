<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_comprobante".
 *
 * @property integer $id
 * @property string $descripcion
 *
 * @property Compras[] $compras
 * @property Ventas[] $ventas
 */
class Tipocomprobante extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_comprobante';
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompras()
    {
        return $this->hasMany(Compras::className(), ['id_tipo_comprobante' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVentas()
    {
        return $this->hasMany(Ventas::className(), ['id_tipo_comprobante' => 'id']);
    }
}
