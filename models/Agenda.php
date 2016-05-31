<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agenda".
 *
 * @property integer $id
 * @property string $prioridad
 * @property string $descripcion
 * @property string $inicio
 * @property string $fin
 */
class Agenda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agenda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prioridad'], 'string'],
            [['inicio', 'fin'], 'safe'],
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
            'prioridad' => 'Prioridad',
            'descripcion' => 'Descripción',
            'inicio' => 'Inicio',
            'fin' => 'Fin',
        ];
    }
}
