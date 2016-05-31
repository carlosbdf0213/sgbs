<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cajas".
 *
 * @property integer $id
 * @property string $descripcion
 *
 * @property Cheques[] $cheques
 * @property MovBancos[] $movBancos
 */
class Cajas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cajas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion'], 'required'],
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
    public function getCheques()
    {
        return $this->hasMany(Cheques::className(), ['id_caja' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovBancos()
    {
        return $this->hasMany(MovBancos::className(), ['id_caja' => 'id']);
    }
}
