<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cheques".
 *
 * @property integer $id
 * @property integer $propios
 * @property string $fecha
 * @property integer $id_caja
 * @property integer $id_banco
 * @property string $numero
 * @property string $estado
 * @property string $cuit
 * @property string $fecha_venc
 * @property string $fecha_cobro
 * @property integer $conciliado
 * @property string $clearing
 * @property string $importe
 * @property integer $id_proveedor
 * @property integer $id_cliente
 * @property string $observaciones
 *
 * @property Bancos $idBanco
 * @property Cajas $idCaja
 * @property Clientes $idCliente
 * @property Proveedores $idProveedor
 * @property ChequesDepositados[] $chequesDepositados
 */
class Cheques extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cheques';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['propios', 'id_caja', 'id_banco', 'numero', 'conciliado', 'id_proveedor', 'id_cliente'], 'integer'],
            [['fecha', 'id_banco', 'estado'], 'required'],
            [['fecha', 'fecha_venc', 'fecha_cobro'], 'safe'],
            [['estado', 'clearing', 'observaciones'], 'string'],
            [['importe'], 'number'],
            [['cuit'], 'string', 'max' => 13]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'propios' => 'Propios',
            'fecha' => 'Fecha',
            'id_caja' => 'Caja',
            'id_banco' => 'Banco',
            'numero' => 'Número',
            'estado' => 'Estado',
            'cuit' => 'CUIT',
            'fecha_venc' => 'Fecha Venc',
            'fecha_cobro' => 'Fecha Cobro',
            'conciliado' => 'Conciliado',
            'clearing' => 'Clearing',
            'importe' => 'Importe',
            'id_proveedor' => 'Proveedor',
            'id_cliente' => 'Cliente',
            'observaciones' => 'Observaciones',
			'unificado' => 'Cliente / Proveedor',
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
    public function getIdCliente()
    {
        return $this->hasOne(Clientes::className(), ['id' => 'id_cliente']);
    }
    public function getCliente()
    {
        return $this->hasOne(Clientes::className(), ['id' => 'id_cliente']);
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
    public function getChequesDepositados()
    {
        return $this->hasMany(ChequesDepositados::className(), ['id_cheque' => 'id']);
    }
	    
	public function getUnificado() {
        if($this->propios=='1') {
			$parts = '1';
			return $parts ;
         } else {
			$parts = '2';
			return $parts ;
        }

	}
	public function beforeSave($insert) {
        if(parent::beforeSave($insert))
        {
            $this->fecha = $this->dateToDb($this->fecha);
            $this->fecha_cobro = $this->dateToDb($this->fecha_cobro);
            $this->fecha_venc = $this->dateToDb($this->fecha_venc);
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
    public function getFormattedFechaCobro() {
        if ($this->fecha_cobro!='') {
			$parts = explode('-', substr($this->fecha_cobro, 0, 10));
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
