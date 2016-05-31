<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "siniestros".
 *
 * @property integer $id
 * @property string $referencia
 * @property string $notas
 * @property integer $id_chofer
 * @property string $fecha
 * @property string $fecha_declaracion
 * @property string $fecha_pago
 * @property string $importe_indemnizacion
 * @property string $importe_danios
 * @property string $cia_contrario
 * @property string $telef_contrario
 * @property string $nombre_contrario
 * @property string $poliza_contrario
 * @property string $patente_contrario
 * @property string $marca_contrario
 * @property string $modelo_contrario
 * @property string $color_contrario
 * @property string $notas_contrario
 * @property string $actuaciones
 *
 * @property Choferes $idChofer
 */
class Siniestros extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'siniestros';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'referencia', 'notas', 'id_chofer', 'cia_contrario', 'telef_contrario', 'nombre_contrario', 'poliza_contrario', 'patente_contrario', 'marca_contrario', 'modelo_contrario', 'color_contrario'], 'required'],
            [['id', 'id_chofer'], 'integer'],
            [['fecha', 'fecha_declaracion', 'fecha_pago'], 'safe'],
            [['importe_indemnizacion', 'importe_danios'], 'number'],
            [['notas_contrario', 'actuaciones'], 'string'],
            [['referencia', 'notas', 'cia_contrario', 'telef_contrario', 'nombre_contrario', 'poliza_contrario', 'marca_contrario', 'modelo_contrario', 'color_contrario'], 'string', 'max' => 100],
            [['patente_contrario'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'referencia' => 'Referencia',
            'notas' => 'Notas',
            'id_chofer' => 'Chofer',
            'fecha' => 'Fecha',
            'fecha_declaracion' => 'Fecha de la Declaración',
            'fecha_pago' => 'Fecha de Pago',
            'importe_indemnizacion' => 'Importe de la Indemnización',
            'importe_danios' => 'Importe de los Daños',
            'cia_contrario' => 'Compañía del Contrario',
            'telef_contrario' => 'Teléfono del Contrario',
            'nombre_contrario' => 'Apellidos y Nombres del Contrario',
            'poliza_contrario' => 'Nro de Póliza del Contrario',
            'patente_contrario' => 'Patente del Vehículo Contrario',
            'marca_contrario' => 'Marca del Vehículo Contrario',
            'modelo_contrario' => 'Modelo del Vehículo Contrario',
            'color_contrario' => 'Color del Vehículo Contrario',
            'notas_contrario' => 'Notas y Observaciones',
            'actuaciones' => 'Actuaciones',
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
	public function beforeSave($insert) {
        if(parent::beforeSave($insert))
        {
            $this->fecha = $this->dateToDb($this->fecha);
            $this->fecha_declaracion = $this->dateToDb($this->fecha_declaracion);
            $this->fecha_pago = $this->dateToDb($this->fecha_pago);
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

    public function getFormattedFechaDeclaracion() {
        if ($this->fecha_declaracion!='') {
			$parts = explode('-', substr($this->fecha_declaracion, 0, 10));
			return $parts[2].'/'.$parts[1].'/'.$parts[0];
         } else {
            return '';
        }

	}

    public function getFormattedFechaPago() {
        if ($this->fecha_pago!='') {
			$parts = explode('-', substr($this->fecha_pago, 0, 10));
			return $parts[2].'/'.$parts[1].'/'.$parts[0];
         } else {
            return '';
        }

	}

}
