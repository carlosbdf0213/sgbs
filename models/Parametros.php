<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parametros".
 *
 * @property integer $id
 * @property string $denominacion
 * @property string $domicilio
 * @property string $localidad
 * @property integer $id_provincia
 * @property string $fecha_inicio
 * @property string $cuit
 * @property integer $id_tipo_responsable
 * @property integer $nro_agente_retenc
 * @property integer $nro_establec
 * @property string $enc_linea1_izq
 * @property string $enc_linea2_izq
 * @property string $enc_linea3_izq
 * @property string $enc_linea1_der
 * @property string $enc_linea2_der
 * @property string $enc_linea3_der
 * @property string $fecha_desde
 * @property string $fecha_hasta
 */
class Parametros extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'parametros';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['denominacion', 'domicilio', 'localidad', 'id_provincia', 'fecha_inicio', 'cuit', 'id_tipo_responsable', 'nro_agente_retenc', 'nro_establec', 'enc_linea1_izq', 'enc_linea2_izq', 'enc_linea3_izq', 'enc_linea1_der', 'enc_linea2_der', 'enc_linea3_der', 'fecha_desde', 'fecha_hasta'], 'required'],
            [['id_provincia', 'id_tipo_responsable', 'nro_agente_retenc', 'nro_establec'], 'integer'],
            [['fecha_inicio', 'fecha_desde', 'fecha_hasta'], 'safe'],
            [['denominacion', 'domicilio', 'localidad'], 'string', 'max' => 100],
            [['cuit'], 'string', 'max' => 13],
            [['enc_linea1_izq', 'enc_linea2_izq', 'enc_linea3_izq', 'enc_linea1_der', 'enc_linea2_der', 'enc_linea3_der'], 'string', 'max' => 150]
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
            'domicilio' => 'Domicilio',
            'localidad' => 'Localidad',
            'id_provincia' => 'Provincia',
            'fecha_inicio' => 'Fecha de Inicio',
            'cuit' => 'CUIT',
            'id_tipo_responsable' => 'Tipo de Responsable',
            'nro_agente_retenc' => 'Nro Agente Retención',
            'nro_establec' => 'Nro Establecimiento',
            'enc_linea1_izq' => 'Encabezado 1ra Línea Izquierda',
            'enc_linea2_izq' => 'Encabezado 2da Línea Izquierda',
            'enc_linea3_izq' => 'Encabezado 3ra Línea Izquierda',
            'enc_linea1_der' => 'Encabezado 1ra Línea Derecha',
            'enc_linea2_der' => 'Encabezado 2da Línea Derecha',
            'enc_linea3_der' => 'Encabezado 3ra Línea Derecha',
            'fecha_desde' => 'Fecha Desde',
            'fecha_hasta' => 'Fecha Hasta',
        ];
    }
	public function beforeSave($insert) {
        if(parent::beforeSave($insert))
        {
            $this->fecha_desde = $this->dateToDb($this->fecha_desde);
            $this->fecha_hasta = $this->dateToDb($this->fecha_hasta);
            $this->fecha_inicio = $this->dateToDb($this->fecha_inicio);
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
    
    public function getFormattedFechaInicio() {
        if ($this->fecha_inicio!='') {
			$parts = explode('-', substr($this->fecha_inicio, 0, 10));
			return $parts[2].'/'.$parts[1].'/'.$parts[0];
         } else {
            return '';
        }

	}
    public function getFormattedFechaDesde() {
        if ($this->fecha_desde!='') {
			$parts = explode('-', substr($this->fecha_desde, 0, 10));
			return $parts[2].'/'.$parts[1].'/'.$parts[0];
         } else {
            return '';
        }

	}
    public function getFormattedFechaHasta() {
        if ($this->fecha_hasta!='') {
			$parts = explode('-', substr($this->fecha_hasta, 0, 10));
			return $parts[2].'/'.$parts[1].'/'.$parts[0];
         } else {
            return '';
        }

	}
}
