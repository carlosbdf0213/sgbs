<?php

namespace app\models\searchmodels;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cuitpaises;

/**
 * CuitpaisesSearch represents the model behind the search form about `app\models\Cuitpaises`.
 */
class CuitpaisesSearch extends Cuitpaises
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cuit_pais', 'descripcion', 'tipo_sujeto'], 'safe'],
            [['codigo'], 'integer'],
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
        $query = Cuitpaises::find();

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
            'codigo' => $this->codigo,
        ]);

        $query->andFilterWhere(['like', 'cuit_pais', $this->cuit_pais])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'tipo_sujeto', $this->tipo_sujeto]);

        return $dataProvider;
    }
}
