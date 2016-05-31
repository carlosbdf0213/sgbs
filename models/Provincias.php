<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "provincias".
 *
 * @property integer $id
 * @property string $descripcion
 *
 * @property Bancos[] $bancos
 * @property Choferes[] $choferes
 * @property Clientes[] $clientes
 * @property Proveedores[] $proveedores
 */
class Provincias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'provincias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'descripcion'], 'required'],
            [['id'], 'integer'],
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
    public function getBancos()
    {
        return $this->hasMany(Bancos::className(), ['id_provincia' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChoferes()
    {
        return $this->hasMany(Choferes::className(), ['id_provincia' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasMany(Clientes::className(), ['id_provincia' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProveedores()
    {
        return $this->hasMany(Proveedores::className(), ['id_provincia' => 'id']);
    }
}
