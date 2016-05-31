<?php

namespace app\models\searchmodels;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Depositos;

/**
 * DepositosSearch represents the model behind the search form about `app\models\Depositos`.
 */
class DepositosSearch extends Depositos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_banco', 'id_cuenta', 'boleta'], 'integer'],
            [['descripcion', 'fecha'], 'safe'],
            [['efectivo', 'total_cheques'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Depositos::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_banco' => $this->id_banco,
            'id_cuenta' => $this->id_cuenta,
            'boleta' => $this->boleta,
            'fecha' => $this->fecha,
            'efectivo' => $this->efectivo,
            'total_cheques' => $this->total_cheques,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
