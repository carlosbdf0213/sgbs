<?php

namespace app\models\searchmodels;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Serviciosmanten;

/**
 * ServiciosmantenSearch represents the model behind the search form about `app\models\Serviciosmanten`.
 */
class ServiciosmantenSearch extends Serviciosmanten
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_servicio', 'id_mantenimiento'], 'integer'],
            [['cantidad', 'importe'], 'number'],
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
        $query = Serviciosmanten::find();

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
            'id_servicio' => $this->id_servicio,
            'id_mantenimiento' => $this->id_mantenimiento,
            'cantidad' => $this->cantidad,
            'importe' => $this->importe,
        ]);

        return $dataProvider;
    }
}
