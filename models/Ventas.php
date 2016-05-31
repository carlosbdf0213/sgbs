<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ventas".
 *
 * @property integer $id
 * @property integer $id_cliente
 * @property integer $id_tipo_comprobante
 * @property string $letra
 * @property integer $sucursal
 * @property string $nro_comprobante
 * @property string $fecha
 * @property string $detalle
 * @property string $neto_gravado
 * @property string $no_gravado
 * @property string $imp_internos
 * @property string $imp_municipales
 * @property string $imp_provinciales
 * @property string $imp_nacionales
 * @property string $percepcion
 * @property string $ing_brutos
 * @property string $perc_iva
 * @property string $perc_dgr
 * @property string $tasa_1_iva
 * @property string $importe_1_iva
 * @property string $tasa_2_iva
 * @property string $importe_2_iva
 * @property string $tasa_3_iva
 * @property string $importe_3_iva
 * @property string $tasa_4_iva
 * @property string $importe_4_iva
 * @property string $tasa_5_iva
 * @property string $importe_5_iva
 * @property string $total
 *
 * @property Proveedores $idCliente
 * @property TipoComprobante $idTipoComprobante
 */
class Ventas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ventas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_cliente', 'id_tipo_comprobante'], 'required'],
            [['id_cliente', 'id_tipo_comprobante', 'sucursal', 'nro_comprobante'], 'integer'],
            [['fecha'], 'safe'],
            [['neto_gravado', 'no_gravado', 'imp_internos', 'imp_municipales', 'imp_provinciales', 'imp_nacionales', 'percepcion', 'ing_brutos', 'perc_iva', 'perc_dgr', 'tasa_1_iva', 'importe_1_iva', 'tasa_2_iva', 'importe_2_iva', 'tasa_3_iva', 'importe_3_iva', 'tasa_4_iva', 'importe_4_iva', 'tasa_5_iva', 'importe_5_iva', 'total'], 'number'],
            [['letra'], 'string', 'max' => 1],
            [['detalle'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_cliente' => 'Cliente',
            'id_tipo_comprobante' => 'Tipo de Comprobante',
            'letra' => 'Letra',
            'sucursal' => 'Sucursal',
            'nro_comprobante' => 'Nro de Comprobante',
            'fecha' => 'Fecha',
            'detalle' => 'Detalle',
            'neto_gravado' => 'Neto Gravado',
            'no_gravado' => 'No Gravado',
            'imp_internos' => 'Imp Internos',
            'imp_municipales' => 'Imp Municipales',
            'imp_provinciales' => 'Imp Provinciales',
            'imp_nacionales' => 'Imp Nacionales',
            'percepcion' => 'Percepción',
            'ing_brutos' => 'Ing Brutos',
            'perc_iva' => 'Perc IVA',
            'perc_dgr' => 'Perc DGR',
            'tasa_1_iva' => 'Tasa 1 IVA',
            'importe_1_iva' => 'Importe 1 IVA',
            'tasa_2_iva' => 'Tasa 2 IVA',
            'importe_2_iva' => 'Importe 2 IVA',
            'tasa_3_iva' => 'Tasa 3 IVA',
            'importe_3_iva' => 'Importe 3 IVA',
            'tasa_4_iva' => 'Tasa 4 IVA',
            'importe_4_iva' => 'Importe 4 IVA',
            'tasa_5_iva' => 'Tasa 5 IVA',
            'importe_5_iva' => 'Importe 5 IVA',
            'total' => 'Total',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCliente()
    {
        return $this->hasOne(Proveedores::className(), ['id' => 'id_cliente']);
    }
    public function getCliente()
    {
        return $this->hasOne(Proveedores::className(), ['id' => 'id_cliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipoComprobante()
    {
        return $this->hasOne(TipoComprobante::className(), ['id' => 'id_tipo_comprobante']);
    }
    public function getTipoComprobante()
    {
        return $this->hasOne(TipoComprobante::className(), ['id' => 'id_tipo_comprobante']);
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
