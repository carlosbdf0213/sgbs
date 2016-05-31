<?php

namespace app\models\searchmodels;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Combustibles;

/**
 * CombustiblesSearch represents the model behind the search form about `app\models\Combustibles`.
 */
 
class CombustiblesSearch extends Combustibles
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_camion', 'id_proveedor'], 'integer'],
            [['fecha','camion'], 'safe'],
            [['litros', 'importe', 'km_bitacora', 'tn', 'recorrido', 'consumo', 'rendimiento'], 'number'],
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
        $query = Combustibles::find();
		
        //$query->joinWith(['camion']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
		
        //$dataProvider->sort->attributes['camion'] = [
        //    'asc' => ['camiones.patente' => SORT_ASC],
        //    'desc' => ['camiones.patente' => SORT_DESC],
        //];
		
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_camion' => $this->id_camion,
            'fecha' => $this->fecha,
            'litros' => $this->litros,
            'importe' => $this->importe,
            'km_bitacora' => $this->km_bitacora,
            'id_proveedor' => $this->id_proveedor,
            'recorrido' => $this->recorrido,
            'tn' => $this->tn,
            'consumo' => $this->consumo,
            'rendimiento' => $this->rendimiento,
        ]);
		
       // $query->andFilterWhere(['like', 'camiones.patente', $this->camion]);

        return $dataProvider;
    }
}
