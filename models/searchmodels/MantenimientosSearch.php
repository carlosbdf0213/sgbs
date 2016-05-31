<?php

namespace app\models\searchmodels;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mantenimientos;

/**
 * MantenimientosSearch represents the model behind the search form about `app\models\Mantenimientos`.
 */
 
class MantenimientosSearch extends Mantenimientos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_camion', 'id_tipo_manten', 'id_proveedor', 'dias_vencimiento'], 'integer'],
            [['descripcion', 'fecha', 'fecha_revision', 'fecha_ult_revision', 'fecha_siguiente_revision', 'observaciones'], 'safe'],
            [['kms_revision', 'importe', 'km_ult_revision', 'km_vto', 'km_siguiente_revision'], 'number'],
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
        $query = Mantenimientos::find();

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
            'id_camion' => $this->id_camion,
            'fecha' => $this->fecha,
            'id_tipo_manten' => $this->id_tipo_manten,
            'fecha_revision' => $this->fecha_revision,
            'kms_revision' => $this->kms_revision,
            'importe' => $this->importe,
            'id_proveedor' => $this->id_proveedor,
            'fecha_ult_revision' => $this->fecha_ult_revision,
            'dias_vencimiento' => $this->dias_vencimiento,
            'fecha_siguiente_revision' => $this->fecha_siguiente_revision,
            'km_ult_revision' => $this->km_ult_revision,
            'km_vto' => $this->km_vto,
            'km_siguiente_revision' => $this->km_siguiente_revision,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones]);

        return $dataProvider;
    }
}
