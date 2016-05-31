<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "multas".
 *
 * @property integer $id
 * @property integer $id_chofer
 * @property string $fecha
 * @property string $descripcion
 * @property string $alegato
 * @property string $importe
 * @property string $fecha_venc
 * @property string $fecha_pago
 * @property string $observaciones
 *
 * @property Choferes $idChofer
 */
 

class Multas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'multas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_chofer', 'descripcion'], 'required'],
            [['id_chofer'], 'integer'],
            [['fecha', 'fecha_venc', 'fecha_pago'], 'safe'],
            [['alegato', 'observaciones'], 'string'],
            [['importe'], 'number'],
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
            'id_chofer' => 'Chofer',
            'fecha' => 'Fecha',
            'descripcion' => 'Descripción',
            'alegato' => 'Alegato',
            'importe' => 'Importe',
            'fecha_venc' => 'Fecha de Vencimiento',
            'fecha_pago' => 'Fecha de Pago',
            'observaciones' => 'Observaciones',
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
            $this->fecha_venc = $this->dateToDb($this->fecha_venc);
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

    public function getFormattedFechaVenc() {
        if ($this->fecha_venc!='') {
			$parts = explode('-', substr($this->fecha_venc, 0, 10));
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
