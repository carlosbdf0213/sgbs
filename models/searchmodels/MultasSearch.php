<?php

namespace app\models\searchmodels;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Multas;

/**
 * MultasSearch represents the model behind the search form about `app\models\Multas`.
 */
class MultasSearch extends Multas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_chofer'], 'integer'],
            [['fecha', 'descripcion', 'alegato', 'fecha_venc', 'fecha_pago', 'observaciones'], 'safe'],
            [['importe'], 'number'],
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
        $query = Multas::find();
		
        $query->joinWith(['chofer']);
		
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

  		
        $dataProvider->sort->attributes['chofer'] = [
            'asc' => ['choferes.denominacion' => SORT_ASC],
            'desc' => ['choferes.denominacion' => SORT_DESC],
        ];

		$this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_chofer' => $this->id_chofer,
            'fecha' => $this->fecha,
            'importe' => $this->importe,
            'fecha_venc' => $this->fecha_venc,
            'fecha_pago' => $this->fecha_pago,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'alegato', $this->alegato])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones])
			->andFilterWhere(['like', 'choferes.denominacion', $this->chofer]);
		

        return $dataProvider;
    }
}
