<?php

namespace app\models\searchmodels;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Camiones;

/**
 * CamionesSearch represents the model behind the search form about `app\models\Camiones`.
 */
class CamionesSearch extends Camiones
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_chofer', 'anio_fabric', 'ejes', 'id_tipo_ult_manten', 'id_poliza'], 'integer'],
            [['patente', 'marca', 'modelo', 'tipo', 'nro_chasis', 'nro_motor', 'color', 'fecha_patente', 'fin_garantia', 'fecha_itv', 'fecha_ult_revision'], 'safe'],
            [['tara', 'carga_util', 'kms_ult_revision'], 'number'],
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
        $query = Camiones::find();

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
            'anio_fabric' => $this->anio_fabric,
            'fecha_patente' => $this->fecha_patente,
            'ejes' => $this->ejes,
            'tara' => $this->tara,
            'carga_util' => $this->carga_util,
            'fin_garantia' => $this->fin_garantia,
            'fecha_itv' => $this->fecha_itv,
            'fecha_ult_revision' => $this->fecha_ult_revision,
            'kms_ult_revision' => $this->kms_ult_revision,
            'id_tipo_ult_manten' => $this->id_tipo_ult_manten,
            'id_poliza' => $this->id_poliza,
        ]);

        $query->andFilterWhere(['like', 'patente', $this->patente])
            ->andFilterWhere(['like', 'marca', $this->marca])
            ->andFilterWhere(['like', 'modelo', $this->modelo])
            ->andFilterWhere(['like', 'tipo', $this->tipo])
            ->andFilterWhere(['like', 'nro_chasis', $this->nro_chasis])
			->andFilterWhere(['like', 'choferes.denominacion', $this->chofer])
            ->andFilterWhere(['like', 'nro_motor', $this->nro_motor])
            ->andFilterWhere(['like', 'color', $this->color]);

        return $dataProvider;
    }
}
