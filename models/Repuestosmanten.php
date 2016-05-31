<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "repuestos_manten".
 *
 * @property integer $id
 * @property integer $id_repuesto
 * @property integer $id_mantenimiento
 * @property string $cantidad
 * @property string $importe
 *
 * @property Mantenimientos $idMantenimiento
 * @property Repuestos $idRepuesto
 */
class Repuestosmanten extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'repuestos_manten';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_repuesto', 'id_mantenimiento', 'cantidad', 'importe'], 'required'],
            [['id', 'id_repuesto', 'id_mantenimiento'], 'integer'],
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
            'id_repuesto' => 'Repuesto',
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
    public function getIdRepuesto()
    {
        return $this->hasOne(Repuestos::className(), ['id' => 'id_repuesto']);
    }
    public function getRepuesto()
    {
        return $this->hasOne(Repuestos::className(), ['id' => 'id_repuesto']);
    }
}
