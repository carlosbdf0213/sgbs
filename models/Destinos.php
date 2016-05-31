<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "destinos".
 *
 * @property integer $id
 * @property string $descripcion
 *
 * @property Compras[] $compras
 */
class Destinos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'destinos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'descripcion'], 'required'],
            [['id'], 'integer'],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompras()
    {
        return $this->hasMany(Compras::className(), ['id_destino' => 'id']);
    }
}
