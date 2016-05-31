<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mov_bancos".
 *
 * @property integer $id
 * @property integer $id_operacion_bancaria
 * @property string $descripcion
 * @property string $fecha
 * @property string $debe
 * @property string $haber
 * @property integer $id_caja
 * @property integer $id_banco
 * @property integer $id_cuenta
 * @property integer $id_banco_dest
 * @property integer $id_cuenta_dest
 *
 * @property Bancos $idBanco
 * @property Bancos $idBancoDest
 * @property Cajas $idCaja
 * @property Cuentas $idCuentaDest
 * @property Cuentas $idCuenta
 * @property OperacionesBancarias $idOperacionBancaria
 */
class Movbancos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mov_bancos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_operacion_bancaria', 'descripcion', 'id_banco', 'id_cuenta'], 'required'],
            [['id_operacion_bancaria', 'id_caja', 'id_banco', 'id_cuenta', 'id_banco_dest', 'id_cuenta_dest'], 'integer'],
            [['fecha'], 'safe'],
            [['debe', 'haber'], 'number'],
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
            'id_operacion_bancaria' => 'Operacion Bancaria',
            'descripcion' => 'Descripción',
            'fecha' => 'Fecha',
            'debe' => 'Debe',
            'haber' => 'Haber',
            'id_caja' => 'Caja',
            'id_banco' => 'Banco',
            'id_cuenta' => 'Cuenta',
            'id_banco_dest' => 'Banco de Destino',
            'id_cuenta_dest' => 'Cuenta de Destino',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBanco()
    {
        return $this->hasOne(Bancos::className(), ['id' => 'id_banco']);
    }
    public function getBanco()
    {
        return $this->hasOne(Bancos::className(), ['id' => 'id_banco']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBancoDest()
    {
        return $this->hasOne(Bancos::className(), ['id' => 'id_banco_dest']);
    }
    public function getBancoDest()
    {
        return $this->hasOne(Bancos::className(), ['id' => 'id_banco_dest']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCaja()
    {
        return $this->hasOne(Cajas::className(), ['id' => 'id_caja']);
    }
    public function getCaja()
    {
        return $this->hasOne(Cajas::className(), ['id' => 'id_caja']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCuentaDest()
    {
        return $this->hasOne(Cuentas::className(), ['id' => 'id_cuenta_dest']);
    }
    public function getCuentaDest()
    {
        return $this->hasOne(Cuentas::className(), ['id' => 'id_cuenta_dest']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCuenta()
    {
        return $this->hasOne(Cuentas::className(), ['id' => 'id_cuenta']);
    }
    public function getCuenta()
    {
        return $this->hasOne(Cuentas::className(), ['id' => 'id_cuenta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdOperacionBancaria()
    {
        return $this->hasOne(OperacionesBancarias::className(), ['id' => 'id_operacion_bancaria']);
    }
    public function getOperacionBancaria()
    {
        return $this->hasOne(OperacionesBancarias::className(), ['id' => 'id_operacion_bancaria']);
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
	
	public function getTipooperacion() {   
        if($this->id_operacion_bancaria == 1) {        // deposito
            return "Deposito";
        } else {
            if($this->id_operacion_bancaria == 2) { // extraccion
                return "Extraccion"; 
            } else {
				if($this->id_operacion_bancaria == 11) { // transferencia
					return "Transferencia"; 
				} else {
					return "Otras";
				}
            } 
        }
    }
}
