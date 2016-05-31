<?php

namespace app\models\searchmodels;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bancos;

/**
 * BancosSearch represents the model behind the search form about `app\models\Bancos`.
 */
class BancosSearch extends Bancos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'sucursal', 'id_provincia'], 'integer'],
            [['descripcion', 'direccion', 'localidad', 'codigo_postal', 'telefono', 'fax', 'email', 'web', 'observaciones'], 'safe'],
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
        $query = Bancos::find();
		
        $query->joinWith(['provincia']);
		
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
		
        $dataProvider->sort->attributes['provincia'] = [
            'asc' => ['provincias.descripcion' => SORT_ASC],
            'desc' => ['provincias.descripcion' => SORT_DESC],
        ];
		
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'sucursal' => $this->sucursal,
            'id_provincia' => $this->id_provincia,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'localidad', $this->localidad])
            ->andFilterWhere(['like', 'codigo_postal', $this->codigo_postal])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'web', $this->web])
            ->andFilterWhere(['like', 'provincias.descripcion', $this->provincia])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones]);

        return $dataProvider;
    }
}
