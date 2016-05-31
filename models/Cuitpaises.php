<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuit_paises".
 *
 * @property string $cuit_pais
 * @property string $descripcion
 * @property integer $codigo
 * @property string $tipo_sujeto
 */
class Cuitpaises extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cuit_paises';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cuit_pais', 'descripcion'], 'required'],
            [['codigo'], 'integer'],
            [['cuit_pais'], 'string', 'max' => 11],
            [['descripcion'], 'string', 'max' => 100],
            [['tipo_sujeto'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cuit_pais' => 'CUIT País',
            'descripcion' => 'Descripción',
            'codigo' => 'Cídigo',
            'tipo_sujeto' => 'Tipo Sujeto',
        ];
    }
}
