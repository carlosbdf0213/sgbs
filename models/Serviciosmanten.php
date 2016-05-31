<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servicios_manten".
 *
 * @property integer $id
 * @property integer $id_servicio
 * @property integer $id_mantenimiento
 * @property string $cantidad
 * @property string $importe
 *
 * @property Mantenimientos $idMantenimiento
 * @property Servicios $idServicio
 */
class Serviciosmanten extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'servicios_manten';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_servicio', 'id_mantenimiento', 'cantidad', 'importe'], 'required'],
            [['id', 'id_servicio', 'id_mantenimiento'], 'integer'],
            [['cantidad', 'importe'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_servicio' => 'Servicio',
            'id_mantenimiento' => 'Mantenimiento',
            'cantidad' => 'Cantidad',
            'importe' => 'Importe',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMantenimiento()
    {
        return $this->hasOne(Mantenimientos::className(), ['id' => 'id_mantenimiento']);
    }
    public function getMantenimiento()
    {
        return $this->hasOne(Mantenimientos::className(), ['id' => 'id_mantenimiento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdServicio()
    {
        return $this->hasOne(Servicios::className(), ['id' => 'id_servicio']);
    }
    public function getServicio()
    {
        return $this->hasOne(Servicios::className(), ['id' => 'id_servicio']);
    }
}
