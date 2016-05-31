<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "operacion_cond_iva".
 *
 * @property integer $id
 * @property string $descripcion
 * @property string $alicuota
 */
class Operacioncondiva extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'operacion_cond_iva';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion'], 'required'],
            [['alicuota'], 'number'],
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
            'alicuota' => 'Alícuota',
        ];
    }
}
