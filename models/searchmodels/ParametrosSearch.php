<?php

namespace app\models\searchmodels;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Parametros;

/**
 * ParametrosSearch represents the model behind the search form about `app\models\Parametros`.
 */
class ParametrosSearch extends Parametros
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_provincia', 'id_tipo_responsable', 'nro_agente_retenc', 'nro_establec'], 'integer'],
            [['denominacion', 'domicilio', 'localidad', 'fecha_inicio', 'cuit', 'enc_linea1_izq', 'enc_linea2_izq', 'enc_linea3_izq', 'enc_linea1_der', 'enc_linea2_der', 'enc_linea3_der', 'fecha_desde', 'fecha_hasta'], 'safe'],
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
        $query = Parametros::find();

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
            'id_provincia' => $this->id_provincia,
            'fecha_inicio' => $this->fecha_inicio,
            'id_tipo_responsable' => $this->id_tipo_responsable,
            'nro_agente_retenc' => $this->nro_agente_retenc,
            'nro_establec' => $this->nro_establec,
            'fecha_desde' => $this->fecha_desde,
            'fecha_hasta' => $this->fecha_hasta,
        ]);

        $query->andFilterWhere(['like', 'denominacion', $this->denominacion])
            ->andFilterWhere(['like', 'domicilio', $this->domicilio])
            ->andFilterWhere(['like', 'localidad', $this->localidad])
            ->andFilterWhere(['like', 'cuit', $this->cuit])
            ->andFilterWhere(['like', 'enc_linea1_izq', $this->enc_linea1_izq])
            ->andFilterWhere(['like', 'enc_linea2_izq', $this->enc_linea2_izq])
            ->andFilterWhere(['like', 'enc_linea3_izq', $this->enc_linea3_izq])
            ->andFilterWhere(['like', 'enc_linea1_der', $this->enc_linea1_der])
            ->andFilterWhere(['like', 'enc_linea2_der', $this->enc_linea2_der])
            ->andFilterWhere(['like', 'enc_linea3_der', $this->enc_linea3_der]);

        return $dataProvider;
    }
}
