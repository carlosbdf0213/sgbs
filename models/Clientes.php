<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property integer $id
 * @property string $denominacion
 * @property string $direccion
 * @property string $localidad
 * @property string $codigo_postal
 * @property integer $id_provincia
 * @property string $telefono
 * @property string $celular
 * @property string $fax
 * @property string $email
 * @property string $web
 * @property integer $id_tipo_impositivo
 * @property string $documento_impositivo
 * @property integer $id_tipo_responsable
 * @property string $observaciones
 *
 * @property Cheques[] $cheques
 * @property Provincias $idProvincia
 * @property TipoDocImpositivo $idTipoImpositivo
 * @property TipoResponsable $idTipoResponsable
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_provincia'], 'required'],
            [['id_provincia', 'id_tipo_impositivo', 'id_tipo_responsable'], 'integer'],
            [['observaciones'], 'string'],
            [['denominacion', 'direccion', 'localidad', 'telefono', 'celular', 'fax', 'email', 'web', 'documento_impositivo'], 'string', 'max' => 100],
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
            'denominacion' => 'Denominación',
            'direccion' => 'Dirección',
            'localidad' => 'Localidad',
            'codigo_postal' => 'Código Postal',
            'id_provincia' => 'Provincia',
            'telefono' => 'Teléfono',
            'celular' => 'Celular',
            'fax' => 'Fax',
            'email' => 'E-mail',
            'web' => 'Web',
            'id_tipo_impositivo' => 'Tipo de Documento Impositivo',
            'documento_impositivo' => 'Documento Impositivo',
            'id_tipo_responsable' => 'Tipo de Responsable',
            'observaciones' => 'Observaciones',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCheques()
    {
        return $this->hasMany(Cheques::className(), ['id_cliente' => 'id']);
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
    public function getIdTipoImpositivo()
    {
        return $this->hasOne(TipoDocImpositivo::className(), ['id' => 'id_tipo_impositivo']);
    }
    public function getTipoImpositivo()
    {
        return $this->hasOne(TipoDocImpositivo::className(), ['id' => 'id_tipo_impositivo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipoResponsable()
    {
        return $this->hasOne(TipoResponsable::className(), ['id' => 'id_tipo_responsable']);
    }
    public function getTipoResponsable()
    {
        return $this->hasOne(TipoResponsable::className(), ['id' => 'id_tipo_responsable']);
    }
    public function getClienteN()
    {
        return $this->denominacion;
    }
	
}
