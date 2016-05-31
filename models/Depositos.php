<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "depositos".
 *
 * @property integer $id
 * @property integer $id_banco
 * @property integer $id_cuenta
 * @property integer $boleta
 * @property string $descripcion
 * @property string $fecha
 * @property string $efectivo
 * @property string $total_cheques
 *
 * @property ChequesDepositados[] $chequesDepositados
 * @property Bancos $idBanco
 * @property Cuentas $idCuenta
 */
class Depositos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'depositos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_banco', 'id_cuenta'], 'required'],
            [['id_banco', 'id_cuenta', 'boleta'], 'integer'],
            [['fecha'], 'safe'],
            [['efectivo', 'total_cheques'], 'number'],
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
            'id_banco' => 'Banco',
            'id_cuenta' => 'Cuenta',
            'boleta' => 'Nro de Boleta',
            'descripcion' => 'Descripción',
            'fecha' => 'Fecha',
            'efectivo' => 'Efectivo',
            'total_cheques' => 'Total Cheques',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChequesDepositados()
    {
        return $this->hasMany(ChequesDepositados::className(), ['id_deposito' => 'id']);
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
    public function getIdCuenta()
    {
        return $this->hasOne(Cuentas::className(), ['id' => 'id_cuenta']);
    }
    public function getCuenta()
    {
        return $this->hasOne(Cuentas::className(), ['id' => 'id_cuenta']);
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
