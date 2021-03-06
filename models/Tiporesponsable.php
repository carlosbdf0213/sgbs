<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_responsable".
 *
 * @property integer $id
 * @property string $descripcion
 *
 * @property Choferes[] $choferes
 * @property Clientes[] $clientes
 * @property Proveedores[] $proveedores
 */
class Tiporesponsable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_responsable';
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
    public function getChoferes()
    {
        return $this->hasMany(Choferes::className(), ['id_tipo_responsable' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasMany(Clientes::className(), ['id_tipo_responsable' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProveedores()
    {
        return $this->hasMany(Proveedores::className(), ['id_tipo_responsable' => 'id']);
    }
}
