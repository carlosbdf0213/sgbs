<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "combustibles".
 *
 * @property integer $id
 * @property integer $id_camion
 * @property string $fecha
 * @property string $litros
 * @property string $importe
 * @property string $km_bitacora
 * @property integer $id_proveedor
 * @property string $recorrido
 * @property string $tn
 * @property string $consumo
 * @property string $rendimiento
 *
 * @property Camiones $idCamion
 * @property Proveedores $idProveedor
 */
class Combustibles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'combustibles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_camion', 'id_proveedor', 'recorrido', 'consumo', 'rendimiento'], 'required'],
            [['id_camion', 'id_proveedor'], 'integer'],
            [['fecha','camion'], 'safe'],
            [['litros', 'importe', 'km_bitacora', 'tn', 'recorrido', 'consumo', 'rendimiento'], 'number']
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
            'fecha' => 'Fecha',
            'litros' => 'Litros',
            'importe' => 'Importe',
            'km_bitacora' => 'Km Odómetro',
            'id_proveedor' => 'Proveedor',
            'recorrido' => 'Recorrido',
            'tn' => 'Toneladas',
            'consumo' => 'Consumo',
            'rendimiento' => 'Rendimiento',
			'camion' => 'Patente',
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
	public function beforeSave($insert) {
        if(parent::beforeSave($insert))
        {
            $this->fecha = $this->dateToDb($this->fecha);
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
	
}
