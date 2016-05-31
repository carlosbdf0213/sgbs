<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servicios".
 *
 * @property integer $id
 * @property string $descripcion
 * @property string $cantidad
 * @property string $precio
 *
 * @property ServiciosManten[] $serviciosMantens
 */
class Servicios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'servicios';
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
    public function getServiciosMantens()
    {
        return $this->hasMany(ServiciosManten::className(), ['id_servicio' => 'id']);
    }
}
