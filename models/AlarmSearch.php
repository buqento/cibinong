<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Alarm;

/**
 * AlarmSearch represents the model behind the search form of `app\models\Alarm`.
 */
class AlarmSearch extends Alarm
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kegiatan_id', 'wbp_id'], 'integer'],
            [['waktu', 'kamera', 'nama_wbp', 'snapshot'], 'safe'],
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
        $query = Alarm::find();

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
            'kegiatan_id' => $this->kegiatan_id,
            'wbp_id' => $this->wbp_id,
        ]);

        $query->andFilterWhere(['ilike', 'waktu', $this->waktu])
            ->andFilterWhere(['ilike', 'kamera', $this->kamera])
            ->andFilterWhere(['ilike', 'nama_wbp', $this->nama_wbp])
            ->andFilterWhere(['ilike', 'snapshot', $this->snapshot]);

        return $dataProvider;
    }
}
