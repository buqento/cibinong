<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tenant;

/**
 * TenantSearch represents the model behind the search form of `app\models\Tenant`.
 */
class TenantSearch extends Tenant
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'build_id', 'floor_id'], 'integer'],
            [['company_name', 'open_hour', 'close_hour', 'phone', 'email', 'profile', 'picture', 'address', 'created_at'], 'safe'],
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
        $query = Tenant::find();

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
            'open_hour' => $this->open_hour,
            'close_hour' => $this->close_hour,
            'build_id' => $this->build_id,
            'floor_id' => $this->floor_id,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['ilike', 'company_name', $this->company_name])
            ->andFilterWhere(['ilike', 'phone', $this->phone])
            ->andFilterWhere(['ilike', 'email', $this->email])
            ->andFilterWhere(['ilike', 'profile', $this->profile])
            ->andFilterWhere(['ilike', 'picture', $this->picture])
            ->andFilterWhere(['ilike', 'address', $this->address]);

        return $dataProvider;
    }
}
