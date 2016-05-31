<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "operaciones_bancarias".
 *
 * @property integer $id
 * @property string $descripcion
 *
 * @property MovBancos[] $movBancos
 */
class Operacionesbancarias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'operaciones_bancarias';
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
    public function getMovBancos()
    {
        return $this->hasMany(MovBancos::className(), ['id_operacion_bancaria' => 'id']);
    }
}
