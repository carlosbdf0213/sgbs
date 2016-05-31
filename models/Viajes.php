<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "viajes".
 *
 * @property integer $id
 * @property string $fecha_salida
 * @property string $kms_salida
 * @property string $fecha_llegada
 * @property string $kms_llegada
 * @property integer $id_chofer
 * @property integer $id_camion
 * @property string $km_plus
 * @property string $litros_comb
 * @property string $importe_comb
 * @property string $importe_peajes
 * @property string $importe_gastos
 *
 * @property Camiones $idCamion
 * @property Choferes $idChofer
 */
class Viajes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'viajes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_salida', 'fecha_llegada','chofer','camion'], 'safe'],
            [['kms_salida', 'kms_llegada', 'km_plus', 'litros_comb', 'importe_comb', 'importe_peajes', 'importe_gastos'], 'number'],
            [['id_chofer', 'id_camion'], 'required'],
            [['id_chofer', 'id_camion'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fecha_salida' => 'Fecha de Salida',
            'kms_salida' => 'Kms Salida',
            'fecha_llegada' => 'Fecha de Llegada',
            'kms_llegada' => 'Kms Llegada',
            'id_chofer' => 'Chofer',
            'id_camion' => 'Camión',
            'km_plus' => 'Km Plus',
            'litros_comb' => 'Litros de Combustible',
            'importe_comb' => 'Importe de Combustible',
            'importe_peajes' => 'Importe de Peajes',
            'importe_gastos' => 'Importe de Gastos',
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
            $this->fecha_salida = $this->dateToDb($this->fecha_salida);
            $this->fecha_llegada = $this->dateToDb($this->fecha_llegada);
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
    
	
    public function getFormattedFechaSalida() {
        if ($this->fecha_salida!='') {
			$parts = explode('-', substr($this->fecha_salida, 0, 10));
			return $parts[2].'/'.$parts[1].'/'.$parts[0];
         } else {
            return '';
        }

	}

    public function getFormattedFechaLlegada() {
        if ($this->fecha_llegada!='') {
			$parts = explode('-', substr($this->fecha_llegada, 0, 10));
			return $parts[2].'/'.$parts[1].'/'.$parts[0];
         } else {
            return '';
        }

	}

}
