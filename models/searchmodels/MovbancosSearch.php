<?php

namespace app\models\searchmodels;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Movbancos;

/**
 * MovbancosSearch represents the model behind the search form about `app\models\Movbancos`.
 */
class MovbancosSearch extends Movbancos
{
	public $tipooperacion_;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_operacion_bancaria', 'id_caja', 'id_banco', 'id_cuenta', 'id_banco_dest', 'id_cuenta_dest'], 'integer'],
            [['descripcion', 'fecha','caja','banco','cuenta'], 'safe'],
            [['debe', 'haber'], 'number'],
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
        $query = Movbancos::find();

        $query->joinWith(['caja']);
		$query->joinWith(['banco']);
		$query->joinWith(['cuenta']);
		
		if(isset($this->tipooperacion_)) {
			
			if($this->tipooperacion_=='Depositos') {
				$query->andFilterWhere([
					'id_operacion_bancaria' => '1',
				]);
			};
			if ($this->tipooperacion_=='Extracciones'){
				$query->andFilterWhere([
					'id_operacion_bancaria' => '2',
				]);
			}
			if ($this->tipooperacion_=='Transferencias'){
				$query->andFilterWhere([
					'id_operacion_bancaria' => '11',
				]);
			}
			
		}		
		
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
		
        $dataProvider->sort->attributes['caja'] = [
            'asc' => ['cajas.descripcion' => SORT_ASC],
            'desc' => ['cajas.descripcion' => SORT_DESC],
        ];		
		
        $dataProvider->sort->attributes['banco'] = [
            'asc' => ['bancos.descripcion' => SORT_ASC],
            'desc' => ['bancos.descripcion' => SORT_DESC],
        ];
		
        $dataProvider->sort->attributes['cuenta'] = [
            'asc' => ['cuentas.descripcion' => SORT_ASC],
            'desc' => ['cuentas.descripcion' => SORT_DESC],
        ];
		
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_operacion_bancaria' => $this->id_operacion_bancaria,
            'fecha' => $this->fecha,
            'debe' => $this->debe,
            'haber' => $this->haber,
            'id_caja' => $this->id_caja,
            'id_banco' => $this->id_banco,
            'id_cuenta' => $this->id_cuenta,
            'id_banco_dest' => $this->id_banco_dest,
            'id_cuenta_dest' => $this->id_cuenta_dest,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'cajas.descripcion', $this->caja])
            ->andFilterWhere(['like', 'cuentas.descripcion', $this->cuenta])
            ->andFilterWhere(['like', 'bancos.descripcion', $this->banco]);

        return $dataProvider;
    }
	
    public function setTipooperacion($operacionbancaria) {
		
		if ($operacionbancaria=='Depositos') {
			 $this->tipooperacion_ = 'Depositos';
			 return $this->tipooperacion_;
		} else { 
			if ($operacionbancaria=='Extracciones') {
				$this->tipooperacion_ = 'Extracciones';
				return $this->tipooperacion_;
			} else {
				if ($operacionbancaria=='Transferencias') {
					$this->tipooperacion_ = 'Transferencias';
					return $this->tipooperacion_;
				} else {
					$this->tipooperacion_ = 'Otras';
					return $this->tipooperacion_;
				}
			}
		}
		
       
    }
}
