<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bancos".
 *
 * @property integer $id
 * @property integer $sucursal
 * @property string $descripcion
 * @property string $direccion
 * @property string $localidad
 * @property string $codigo_postal
 * @property integer $id_provincia
 * @property string $telefono
 * @property string $fax
 * @property string $email
 * @property string $web
 * @property string $observaciones
 *
 * @property Provincias $idProvincia
 * @property Cheques[] $cheques
 * @property Cuentas[] $cuentas
 * @property Depositos[] $depositos
 * @property MovBancos[] $movBancos
 * @property MovBancos[] $movBancos0
 */
class Bancos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bancos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sucursal', 'descripcion', 'direccion', 'localidad', 'id_provincia'], 'required'],
            [['sucursal', 'id_provincia'], 'integer'],
            [['observaciones'], 'string'],
            [['descripcion', 'direccion', 'localidad', 'telefono', 'fax', 'email', 'web'], 'string', 'max' => 100],
            [['codigo_postal'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sucursal' => 'Sucursal',
            'descripcion' => 'Nombre',
            'direccion' => 'Dirección',
            'localidad' => 'Localidad',
            'codigo_postal' => 'Código Postal',
            'id_provincia' => 'Provincia',
            'telefono' => 'Teléfono',
            'fax' => 'Fax',
            'email' => 'E-mail',
            'web' => 'Web',
            'observaciones' => 'Observaciones',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProvincia()
    {
        return $this->hasOne(Provincias::className(), ['id' => 'id_provincia']);
    }
    public function getProvincia()
    {
        return $this->hasOne(Provincias::className(), ['id' => 'id_provincia']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCheques()
    {
        return $this->hasMany(Cheques::className(), ['id_banco' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCuentas()
    {
        return $this->hasMany(Cuentas::className(), ['id_banco' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepositos()
    {
        return $this->hasMany(Depositos::className(), ['id_banco' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovBancos()
    {
        return $this->hasMany(MovBancos::className(), ['id_banco' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovBancos0()
    {
        return $this->hasMany(MovBancos::className(), ['id_banco_dest' => 'id']);
    }
	
	public function getDesComp(){
		return $this->descripcion .', '.$this->localidad;			
    }
}
