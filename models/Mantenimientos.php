<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mantenimientos".
 *
 * @property integer $id
 * @property integer $id_camion
 * @property string $descripcion
 * @property string $fecha
 * @property integer $id_tipo_manten
 * @property string $fecha_revision
 * @property string $kms_revision
 * @property string $importe
 * @property integer $id_proveedor
 * @property string $fecha_ult_revision
 * @property integer $dias_vencimiento
 * @property string $fecha_siguiente_revision
 * @property string $km_ult_revision
 * @property string $km_vto
 * @property string $km_siguiente_revision
 * @property string $observaciones
 *
 * @property Camiones $idCamion
 * @property Proveedores $idProveedor
 * @property TipoManten $idTipoManten
 * @property RepuestosManten[] $repuestosMantens
 * @property ServiciosManten[] $serviciosMantens
 */
class Mantenimientos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mantenimientos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_camion', 'descripcion', 'id_tipo_manten'], 'required'],
            [['id_camion', 'id_tipo_manten', 'id_proveedor', 'dias_vencimiento'], 'integer'],
            [['fecha', 'fecha_revision', 'fecha_ult_revision', 'fecha_siguiente_revision'], 'safe'],
            [['kms_revision', 'importe', 'km_ult_revision', 'km_vto', 'km_siguiente_revision'], 'number'],
            [['observaciones'], 'string'],
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
            'id_camion' => 'Camión',
            'descripcion' => 'Descripción',
            'fecha' => 'Fecha',
            'id_tipo_manten' => 'Tipo de Manteninimiento',
            'fecha_revision' => 'Fecha de Revisión',
            'kms_revision' => 'Kms Revisión',
            'importe' => 'Importe',
            'id_proveedor' => 'Proveedor',
            'fecha_ult_revision' => 'Fecha Última Revisión',
            'dias_vencimiento' => 'Días al Vencimiento',
            'fecha_siguiente_revision' => 'Fecha Siguiente Revisión',
            'km_ult_revision' => 'Kms Ult Revisión',
            'km_vto' => 'Kms al Vto',
            'km_siguiente_revision' => 'Kms Siguiente Revisión',
            'observaciones' => 'Observaciones',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCamion()
    {
        return $this->hasOne(Camiones::className(), ['id' => 'id_camion']);
    }
    public function getCamion()
    {
        return $this->hasOne(Camiones::className(), ['id' => 'id_camion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProveedor()
    {
        return $this->hasOne(Proveedores::className(), ['id' => 'id_proveedor']);
    }
    public function getProveedor()
    {
        return $this->hasOne(Proveedores::className(), ['id' => 'id_proveedor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipoManten()
    {
        return $this->hasOne(TipoManten::className(), ['id' => 'id_tipo_manten']);
    }
    public function getTipoManten()
    {
        return $this->hasOne(TipoManten::className(), ['id' => 'id_tipo_manten']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRepuestosMantens()
    {
        return $this->hasMany(RepuestosManten::className(), ['id_mantenimiento' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServiciosMantens()
    {
        return $this->hasMany(ServiciosManten::className(), ['id_mantenimiento' => 'id']);
    }
	public function beforeSave($insert) {
        if(parent::beforeSave($insert))
        {
            $this->fecha = $this->dateToDb($this->fecha);
            $this->fecha_revision = $this->dateToDb($this->fecha_revision);
            $this->fecha_ult_revision = $this->dateToDb($this->fecha_ult_revision);
            $this->fecha_siguiente_revision = $this->dateToDb($this->fecha_siguiente_revision);
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
    
    public function getFormattedFecha() {
        if ($this->fecha!='') {
			$parts = explode('-', substr($this->fecha, 0, 10));
			return $parts[2].'/'.$parts[1].'/'.$parts[0];
         } else {
            return '';
        }

	}
    public function getFormattedFechaRevision() {
        if ($this->fecha_revision!='') {
			$parts = explode('-', substr($this->fecha_revision, 0, 10));
			return $parts[2].'/'.$parts[1].'/'.$parts[0];
         } else {
            return '';
        }

	}
    public function getFormattedFechaUltRevision() {
        if ($this->fecha_ult_revision!='') {
			$parts = explode('-', substr($this->fecha_ult_revision, 0, 10));
			return $parts[2].'/'.$parts[1].'/'.$parts[0];
         } else {
            return '';
        }

	}
    public function getFormattedFechaSiguienteRevision() {
        if ($this->fecha_siguiente_revision!='') {
			$parts = explode('-', substr($this->fecha_siguiente_revision, 0, 10));
			return $parts[2].'/'.$parts[1].'/'.$parts[0];
         } else {
            return '';
        }

	}
}
