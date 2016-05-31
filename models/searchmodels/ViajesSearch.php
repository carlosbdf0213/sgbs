<?php

namespace app\models\searchmodels;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Viajes;

/**
 * ViajesSearch represents the model behind the search form about `app\models\Viajes`.
 */
class ViajesSearch extends Viajes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_chofer', 'id_camion'], 'integer'],
            [['fecha_salida', 'fecha_llegada','chofer','camion'], 'safe'],
            [['kms_salida', 'kms_llegada', 'km_plus', 'litros_comb', 'importe_comb', 'importe_peajes', 'importe_gastos'], 'number'],
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
        $query = Viajes::find();
		
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
            'fecha_salida' => $this->fecha_salida,
            'kms_salida' => $this->kms_salida,
            'fecha_llegada' => $this->fecha_llegada,
            'kms_llegada' => $this->kms_llegada,
            'id_chofer' => $this->id_chofer,
            'id_camion' => $this->id_camion,
            'km_plus' => $this->km_plus,
            'litros_comb' => $this->litros_comb,
            'importe_comb' => $this->importe_comb,
            'importe_peajes' => $this->importe_peajes,
            'importe_gastos' => $this->importe_gastos,
        ]);
		
		$query->andFilterWhere(['like', 'choferes.denominacion', $this->chofer]);
		
        return $dataProvider;
    }
}
