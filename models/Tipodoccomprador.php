<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_doc_comprador".
 *
 * @property integer $id
 * @property string $descripcion
 */
class Tipodoccomprador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_doc_comprador';
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
}
