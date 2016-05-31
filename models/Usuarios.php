<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property integer $id
 * @property string $username
 * @property string $nombres
 * @property string $apellidos
 * @property string $email
 * @property string $password
 * @property string $observaciones
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'nombres', 'apellidos'], 'required'],
            [['observaciones'], 'string'],
            [['username'], 'string', 'max' => 50],
            [['nombres', 'apellidos', 'email', 'password'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Usuario',
            'nombres' => 'Nombres',
            'apellidos' => 'Apellidos',
            'email' => 'Email',
            'password' => 'Password',
            'observaciones' => 'Observaciones',
        ];
    }
}
