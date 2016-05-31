<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "repuestos".
 *
 * @property integer $id
 * @property string $descripcion
 * @property string $cantidad
 * @property string $precio
 *
 * @property RepuestosManten[] $repuestosMantens
 */
class Repuestos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'repuestos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'descripcion'], 'required'],
            [['id'], 'integer'],
            [['cantidad', 'precio'], 'number'],
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
            'descripcion' => 'Descripción',
            'cantidad' => 'Cantidad',
            'precio' => 'Precio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRepuestosMantens()
    {
        return $this->hasMany(RepuestosManten::className(), ['id_repuesto' => 'id']);
    }
}
