<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "compras".
 *
 * @property integer $id
 * @property integer $mes_fiscal
 * @property integer $anio_fiscal
 * @property integer $id_proveedor
 * @property integer $id_tipo_comprobante
 * @property string $letra
 * @property integer $sucursal
 * @property string $nro_comprobante
 * @property string $fecha
 * @property integer $id_destino
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
 * @property Destinos $idDestino
 * @property Proveedores $idProveedor
 * @property TipoComprobante $idTipoComprobante
 */
class Compras extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'compras';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mes_fiscal', 'anio_fiscal', 'id_proveedor', 'id_tipo_comprobante'], 'required'],
            [['mes_fiscal', 'anio_fiscal', 'id_proveedor', 'id_tipo_comprobante', 'sucursal', 'nro_comprobante', 'id_destino'], 'integer'],
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
            'mes_fiscal' => 'Mes',
            'anio_fiscal' => 'Año',
            'id_proveedor' => 'Proveedor',
            'id_tipo_comprobante' => 'Tipo de Comprobante',
            'letra' => 'Letra',
            'sucursal' => 'Sucursal',
            'nro_comprobante' => 'Nro de Comprobante',
            'fecha' => 'Fecha',
            'id_destino' => 'Destino',
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
    public function getIdDestino()
    {
        return $this->hasOne(Destinos::className(), ['id' => 'id_destino']);
    }
    public function getDestino()
    {
        return $this->hasOne(Destinos::className(), ['id' => 'id_destino']);
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
    public function getIdTipocomprobante()
    {
        return $this->hasOne(Tipocomprobante::className(), ['id' => 'id_tipo_comprobante']);
    }
    public function getTipocomprobante()
    {
        return $this->hasOne(Tipocomprobante::className(), ['id' => 'id_tipo_comprobante']);
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
