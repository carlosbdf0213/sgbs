<?php

namespace app\models\searchmodels;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Choferes;

/**
 * ChoferesSearch represents the model behind the search form about `app\models\Choferes`.
 */
class ChoferesSearch extends Choferes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_provincia', 'id_tipo_impositivo', 'id_tipo_responsable'], 'integer'],
            [['denominacion', 'direccion', 'localidad', 'codigo_postal', 'telefono', 'celular', 'fax', 'email', 'web', 'documento_impositivo', 'fecha_ing', 'fecha_baja', 'observaciones','provincia'], 'safe'],
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
        $query = Choferes::find();

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
            'id_provincia' => $this->id_provincia,
            'id_tipo_impositivo' => $this->id_tipo_impositivo,
            'id_tipo_responsable' => $this->id_tipo_responsable,
            'fecha_ing' => $this->fecha_ing,
            'fecha_baja' => $this->fecha_baja,
        ]);

        $query->andFilterWhere(['like', 'denominacion', $this->denominacion])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'localidad', $this->localidad])
            ->andFilterWhere(['like', 'codigo_postal', $this->codigo_postal])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'celular', $this->celular])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'web', $this->web])
            ->andFilterWhere(['like', 'documento_impositivo', $this->documento_impositivo])
            ->andFilterWhere(['like', 'provincias.descripcion', $this->provincia])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones]);

        return $dataProvider;
    }
}
