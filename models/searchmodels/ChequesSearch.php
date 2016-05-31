<?php

namespace app\models\searchmodels;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cheques;

/**
 * ChequesSearch represents the model behind the search form about `app\models\Cheques`.
 */
class ChequesSearch extends Cheques
{
    public $propios_;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'propios', 'id_caja', 'id_banco', 'numero', 'conciliado', 'id_proveedor', 'id_cliente'], 'integer'],
            [['fecha', 'estado', 'cuit', 'fecha_venc', 'fecha_cobro', 'clearing', 'observaciones','unificado','proveedor','cliente'], 'safe'],
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
        $query = Cheques::find();
		
        $query->joinWith(['caja']);
        $query->joinWith(['banco']);
        $query->joinWith(['proveedor']);
        $query->joinWith(['cliente']);
		
		if(isset($this->propios_)) {		
			if($this->propios_=='1') {
					$query->andFilterWhere([
						'propios' => '1',
					]);
			} else {
					$query->andFilterWhere([
						'not like', 'propios',  '1'
					]);
			} ;
		};
					
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['unificado'] = [
            'asc' => ['clientes.denominacion' => SORT_ASC,'proveedores.denominacion' => SORT_ASC],
            'desc' => ['clientes.denominacion' => SORT_DESC,'proveedores.denominacion' => SORT_DESC],
        ];
		
        $dataProvider->sort->attributes['caja'] = [
            'asc' => ['cajas.descripcion' => SORT_ASC],
            'desc' => ['cajas.descripcion' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['banco'] = [
            'asc' => ['bancos.descripcion' => SORT_ASC],
            'desc' => ['bancos.descripcion' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['proveedor'] = [
            'asc' => ['proveedores.denominacion' => SORT_ASC],
            'desc' => ['proveedores.denominacion' => SORT_DESC],
        ];
		
        $dataProvider->sort->attributes['cliente'] = [
            'asc' => ['clientes.denominacion' => SORT_ASC],
            'desc' => ['clientes.denominacion' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'propios' => $this->propios,
            'fecha' => $this->fecha,
            'id_caja' => $this->id_caja,
            'id_banco' => $this->id_banco,
            'numero' => $this->numero,
            'fecha_venc' => $this->fecha_venc,
            'fecha_cobro' => $this->fecha_cobro,
            'conciliado' => $this->conciliado,
            'importe' => $this->importe,
            'id_proveedor' => $this->id_proveedor,
            'id_cliente' => $this->id_cliente,
        ]);

        $query->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'cuit', $this->cuit])
            ->andFilterWhere(['like', 'clearing', $this->clearing])
            ->andFilterWhere(['like', 'cajas.descripcion', $this->caja])
            ->andFilterWhere(['like', 'bancos.descripcion', $this->banco])
            ->andFilterWhere(['like', 'clientes.denominacion', $this->cliente])
            ->andFilterWhere(['like', 'proveedores.denominacion', $this->proveedor])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones]);

        return $dataProvider;
    }
	public function setPropios($propios) {
        $this->propios_ = $propios;
    }
}
