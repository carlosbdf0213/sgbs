<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "camiones".
 *
 * @property integer $id
 * @property integer $id_chofer
 * @property string $patente
 * @property string $marca
 * @property string $modelo
 * @property string $tipo
 * @property integer $anio_fabric
 * @property string $nro_chasis
 * @property string $nro_motor
 * @property string $color
 * @property string $fecha_patente
 * @property integer $ejes
 * @property string $tara
 * @property string $carga_util
 * @property string $fin_garantia
 * @property string $fecha_itv
 * @property string $fecha_ult_revision
 * @property string $kms_ult_revision
 * @property integer $id_tipo_ult_manten
 * @property integer $id_poliza
 *
 * @property Choferes $idChofer
 * @property Polizas $idPoliza
 * @property TipoManten $idTipoUltManten
 * @property Combustibles[] $combustibles
 * @property Mantenimientos[] $mantenimientos
 * @property Viajes[] $viajes
 */
class Camiones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'camiones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_chofer', 'patente', 'marca', 'modelo', 'tipo', 'anio_fabric'], 'required'],
            [['id_chofer', 'anio_fabric', 'ejes', 'id_tipo_ult_manten', 'id_poliza'], 'integer'],
            [['fecha_patente', 'fin_garantia', 'fecha_itv', 'fecha_ult_revision'], 'safe'],
            [['tara', 'carga_util', 'kms_ult_revision'], 'number'],
            [['patente'], 'string', 'max' => 10],
            [['marca', 'modelo', 'tipo', 'nro_chasis', 'nro_motor', 'color'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_chofer' => 'Chofer',
            'patente' => 'Patente',
            'marca' => 'Marca',
            'modelo' => 'Modelo',
            'tipo' => 'Tipo',
            'anio_fabric' => 'Año de Fabricación',
            'nro_chasis' => 'Nro de Chasis',
            'nro_motor' => 'Nro de Motor',
            'color' => 'Color',
            'fecha_patente' => 'Fecha Patentamiento',
            'ejes' => 'Ejes',
            'tara' => 'Tara',
            'carga_util' => 'Carga Útil',
            'fin_garantia' => 'Fin de la Garantía',
            'fecha_itv' => 'Fecha VTV',
            'fecha_ult_revision' => 'Fecha Última Revisión',
            'kms_ult_revision' => 'Kms Última Revisión',
            'id_tipo_ult_manten' => 'Tipo Último Mantenimiento',
            'id_poliza' => 'Póliza de Seguro',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdChofer()
    {
        return $this->hasOne(Choferes::className(), ['id' => 'id_chofer']);
    }
    public function getChofer()
    {
        return $this->hasOne(Choferes::className(), ['id' => 'id_chofer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPoliza()
    {
        return $this->hasOne(Polizas::className(), ['id' => 'id_poliza']);
    }
    public function getPoliza()
    {
        return $this->hasOne(Polizas::className(), ['id' => 'id_poliza']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipoUltManten()
    {
        return $this->hasOne(TipoManten::className(), ['id' => 'id_tipo_ult_manten']);
    }
    public function getTipoUltManten()
    {
        return $this->hasOne(TipoManten::className(), ['id' => 'id_tipo_ult_manten']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCombustibles()
    {
        return $this->hasMany(Combustibles::className(), ['id_camion' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMantenimientos()
    {
        return $this->hasMany(Mantenimientos::className(), ['id_camion' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getViajes()
    {
        return $this->hasMany(Viajes::className(), ['id_camion' => 'id']);
    }
	public function beforeSave($insert) {
        if(parent::beforeSave($insert))
        {
            $this->fecha_patente = $this->dateToDb($this->fecha_patente);
            $this->fecha_itv = $this->dateToDb($this->fecha_itv);
            $this->fecha_ult_revision = $this->dateToDb($this->fecha_ult_revision);
            $this->fin_garantia = $this->dateToDb($this->fin_garantia);
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
    
    public function getFormattedFechaPatente() {
        if ($this->fecha_patente!='') {
			$parts = explode('-', substr($this->fecha_patente, 0, 10));
			return $parts[2].'/'.$parts[1].'/'.$parts[0];
         } else {
            return '';
        }

	}
    public function getFormattedFechaItv() {
        if ($this->fecha_itv!='') {
			$parts = explode('-', substr($this->fecha_itv, 0, 10));
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
    public function getFormattedFinGarantia() {
        if ($this->fin_garantia!='') {
			$parts = explode('-', substr($this->fin_garantia, 0, 10));
			return $parts[2].'/'.$parts[1].'/'.$parts[0];
         } else {
            return '';
        }

	}
}

?>
