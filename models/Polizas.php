<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "polizas".
 *
 * @property integer $id
 * @property string $descripcion
 * @property string $cia
 * @property string $contacto
 * @property string $telefono
 * @property string $celular
 * @property string $fax
 * @property string $email
 * @property string $fecha_pago
 * @property string $fecha_venc
 * @property string $cobertura
 *
 * @property Camiones[] $camiones
 */
class Polizas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'polizas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion', 'cia', 'contacto'], 'required'],
            [['fecha_pago', 'fecha_venc'], 'safe'],
            [['cobertura'], 'string'],
            [['descripcion', 'cia', 'contacto', 'telefono', 'celular', 'fax', 'email'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descripcion' => 'Descripción',
            'cia' => 'Compañía',
            'contacto' => 'Contacto',
            'telefono' => 'Teléfono',
            'celular' => 'Celular',
            'fax' => 'Fax',
            'email' => 'E-mail',
            'fecha_pago' => 'Fecha de Pago',
            'fecha_venc' => 'Fecha de Vencimiento',
            'cobertura' => 'Cobertura',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCamiones()
    {
        return $this->hasMany(Camiones::className(), ['id_poliza' => 'id']);
    }
	public function beforeSave($insert) {
        if(parent::beforeSave($insert))
        {
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
    
    public function getFormattedFechaPago() {
        if ($this->fecha_pago!='') {
			$parts = explode('-', substr($this->fecha_pago, 0, 10));
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
	
}
