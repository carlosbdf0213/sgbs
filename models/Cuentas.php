<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuentas".
 *
 * @property integer $id
 * @property integer $id_banco
 * @property string $tipo
 * @property integer $numero
 * @property string $descripcion
 *
 * @property Bancos $idBanco
 * @property Depositos[] $depositos
 * @property MovBancos[] $movBancos
 * @property MovBancos[] $movBancos0
 */
class Cuentas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cuentas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_banco', 'tipo', 'numero', 'descripcion'], 'required'],
            [['id_banco', 'numero'], 'integer'],
            [['tipo'], 'string'],
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
            'id_banco' => 'Banco',
            'tipo' => 'Tipo',
            'numero' => 'Número',
            'descripcion' => 'Descripción',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBanco()
    {
        return $this->hasOne(Bancos::className(), ['id' => 'id_banco']);
    }
    public function getBanco()
    {
        return $this->hasOne(Bancos::className(), ['id' => 'id_banco']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepositos()
    {
        return $this->hasMany(Depositos::className(), ['id_cuenta' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovBancos()
    {
        return $this->hasMany(MovBancos::className(), ['id_cuenta_dest' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovBancos0()
    {
        return $this->hasMany(MovBancos::className(), ['id_cuenta' => 'id']);
    }
}
