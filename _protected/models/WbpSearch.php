<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Wbp;

/**
 * WbpSearch represents the model behind the search form of `app\models\Wbp`.
 */
class WbpSearch extends Wbp
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'wbpid', 'blok_id', 'sel_id'], 'integer'],
            [['name', 'foto'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Wbp::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'wbpid' => $this->wbpid,
            'blok_id' => $this->blok_id,
            'sel_id' => $this->sel_id,
        ]);

        $query->andFilterWhere(['ilike', 'name', $this->name])
            ->andFilterWhere(['ilike', 'foto', $this->foto]);

        return $dataProvider;
    }
}
