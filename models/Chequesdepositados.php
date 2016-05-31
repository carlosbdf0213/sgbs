<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cheques_depositados".
 *
 * @property integer $id
 * @property integer $id_deposito
 * @property integer $id_cheque
 *
 * @property Cheques $idCheque
 * @property Depositos $idDeposito
 */
class Chequesdepositados extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cheques_depositados';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_deposito', 'id_cheque'], 'required'],
            [['id_deposito', 'id_cheque'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_deposito' => 'Depósito',
            'id_cheque' => 'Cheque',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCheque()
    {
        return $this->hasOne(Cheques::className(), ['id' => 'id_cheque']);
    }
    public function getCheque()
    {
        return $this->hasOne(Cheques::className(), ['id' => 'id_cheque']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDeposito()
    {
        return $this->hasOne(Depositos::className(), ['id' => 'id_deposito']);
    }
    public function getDeposito()
    {
        return $this->hasOne(Depositos::className(), ['id' => 'id_deposito']);
    }
}
