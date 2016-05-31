<?php

namespace app\models\searchmodels;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ventas;

/**
 * VentasSearch represents the model behind the search form about `app\models\Ventas`.
 */
class VentasSearch extends Ventas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_cliente', 'id_tipo_comprobante', 'sucursal', 'nro_comprobante'], 'integer'],
            [['letra', 'fecha', 'detalle'], 'safe'],
            [['neto_gravado', 'no_gravado', 'imp_internos', 'imp_municipales', 'imp_provinciales', 'imp_nacionales', 'percepcion', 'ing_brutos', 'perc_iva', 'perc_dgr', 'tasa_1_iva', 'importe_1_iva', 'tasa_2_iva', 'importe_2_iva', 'tasa_3_iva', 'importe_3_iva', 'tasa_4_iva', 'importe_4_iva', 'tasa_5_iva', 'importe_5_iva', 'total'], 'number'],
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
        $query = Ventas::find();

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
            'id_cliente' => $this->id_cliente,
            'id_tipo_comprobante' => $this->id_tipo_comprobante,
            'sucursal' => $this->sucursal,
            'nro_comprobante' => $this->nro_comprobante,
            'fecha' => $this->fecha,
            'neto_gravado' => $this->neto_gravado,
            'no_gravado' => $this->no_gravado,
            'imp_internos' => $this->imp_internos,
            'imp_municipales' => $this->imp_municipales,
            'imp_provinciales' => $this->imp_provinciales,
            'imp_nacionales' => $this->imp_nacionales,
            'percepcion' => $this->percepcion,
            'ing_brutos' => $this->ing_brutos,
            'perc_iva' => $this->perc_iva,
            'perc_dgr' => $this->perc_dgr,
            'tasa_1_iva' => $this->tasa_1_iva,
            'importe_1_iva' => $this->importe_1_iva,
            'tasa_2_iva' => $this->tasa_2_iva,
            'importe_2_iva' => $this->importe_2_iva,
            'tasa_3_iva' => $this->tasa_3_iva,
            'importe_3_iva' => $this->importe_3_iva,
            'tasa_4_iva' => $this->tasa_4_iva,
            'importe_4_iva' => $this->importe_4_iva,
            'tasa_5_iva' => $this->tasa_5_iva,
            'importe_5_iva' => $this->importe_5_iva,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'letra', $this->letra])
            ->andFilterWhere(['like', 'detalle', $this->detalle]);

        return $dataProvider;
    }
}
