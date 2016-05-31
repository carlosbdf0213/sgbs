<?php

namespace app\models\searchmodels;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Siniestros;

/**
 * SiniestrosSearch represents the model behind the search form about `app\models\Siniestros`.
 */
class SiniestrosSearch extends Siniestros
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_chofer'], 'integer'],
            [['referencia', 'notas', 'fecha', 'fecha_declaracion', 'fecha_pago', 'cia_contrario', 'telef_contrario', 'nombre_contrario', 'poliza_contrario', 'patente_contrario', 'marca_contrario', 'modelo_contrario', 'color_contrario', 'notas_contrario', 'actuaciones'], 'safe'],
            [['importe_indemnizacion', 'importe_danios'], 'number'],
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
        $query = Siniestros::find();

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
            'id_chofer' => $this->id_chofer,
            'fecha' => $this->fecha,
            'fecha_declaracion' => $this->fecha_declaracion,
            'fecha_pago' => $this->fecha_pago,
            'importe_indemnizacion' => $this->importe_indemnizacion,
            'importe_danios' => $this->importe_danios,
        ]);

        $query->andFilterWhere(['like', 'referencia', $this->referencia])
            ->andFilterWhere(['like', 'notas', $this->notas])
            ->andFilterWhere(['like', 'cia_contrario', $this->cia_contrario])
            ->andFilterWhere(['like', 'telef_contrario', $this->telef_contrario])
            ->andFilterWhere(['like', 'nombre_contrario', $this->nombre_contrario])
            ->andFilterWhere(['like', 'poliza_contrario', $this->poliza_contrario])
            ->andFilterWhere(['like', 'patente_contrario', $this->patente_contrario])
            ->andFilterWhere(['like', 'marca_contrario', $this->marca_contrario])
            ->andFilterWhere(['like', 'modelo_contrario', $this->modelo_contrario])
            ->andFilterWhere(['like', 'color_contrario', $this->color_contrario])
            ->andFilterWhere(['like', 'notas_contrario', $this->notas_contrario])
            ->andFilterWhere(['like', 'actuaciones', $this->actuaciones]);

        return $dataProvider;
    }
}
