<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "choferes".
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
 * @property string $fecha_ing
 * @property string $fecha_baja
 * @property string $observaciones
 *
 * @property Camiones[] $camiones
 * @property Provincias $idProvincia
 * @property TipoDocImpositivo $idTipoImpositivo
 * @property TipoResponsable $idTipoResponsable
 * @property Multas[] $multas
 * @property Siniestros[] $siniestros
 * @property Viajes[] $viajes
 */
class Choferes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'choferes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_provincia'], 'required'],
            [['id_provincia', 'id_tipo_impositivo', 'id_tipo_responsable'], 'integer'],
            [['fecha_ing', 'fecha_baja'], 'safe'],
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
            'denominacion' => 'Apellidos y Nombres',
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
            'fecha_ing' => 'Fecha de Ingreso',
            'fecha_baja' => 'Fecha de Baja',
            'observaciones' => 'Observaciones',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCamiones()
    {
        return $this->hasMany(Camiones::className(), ['id_chofer' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDeposito()
    {
        return $this->hasOne(Depositos::className(), ['id' => 'id_deposito']);
    }
    public function getDeposito()
    {
        return $this->hasOne(Depositos::className(), ['id' => 'id_deposito']);
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
    public function getIdTipoResponsable()
    {
        return $this->hasOne(TipoResponsable::className(), ['id' => 'id_tipo_responsable']);
    }
    public function getTipoResponsable()
    {
        return $this->hasOne(TipoResponsable::className(), ['id' => 'id_tipo_responsable']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMultas()
    {
        return $this->hasMany(Multas::className(), ['id_chofer' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiniestros()
    {
        return $this->hasMany(Siniestros::className(), ['id_chofer' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getViajes()
    {
        return $this->hasMany(Viajes::className(), ['id_chofer' => 'id']);
    }
	
	public function beforeSave($insert) {
        if(parent::beforeSave($insert))
        {
            $this->fecha_ing = $this->dateToDb($this->fecha_ing);
            $this->fecha_baja = $this->dateToDb($this->fecha_baja);
            return true;
        }
        else
            return false;
    }
    
    public function dateToDb($fecha) {
        if ($fecha!='') {
            $parts = explode('/', $fecha);
            return $parts[2].'-'.$parts[1].'-'.$parts[0];    
        } else {
            return '';
        }
        
    }
    
    public function getFormattedFechaIng() {
        if ($this->fecha_ing!='') {
			$parts = explode('-', substr($this->fecha_ing, 0, 10));
			return $parts[2].'/'.$parts[1].'/'.$parts[0];
         } else {
            return '';
        }

	}
    public function getFormattedFechaBaja() {
        if ($this->fecha_baja!='') {
			$parts = explode('-', substr($this->fecha_baja, 0, 10));
			return $parts[2].'/'.$parts[1].'/'.$parts[0];
         } else {
            return '';
        }
	}
	
}
