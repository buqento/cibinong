<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Absensi;

/**
 * AbsensiSearch represents the model behind the search form of `app\models\Absensi`.
 */
class AbsensiSearch extends Absensi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'wbp_wbpid', 'kegiatan_id'], 'integer'],
            [['status', 'snapshot', 'alasan', 'kamera', 'lokasi', 'tanggal'], 'safe'],
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
        $query = Absensi::find();

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
            'wbp_wbpid' => $this->wbp_wbpid,
            'kegiatan_id' => $this->kegiatan_id,
            'tanggal' => $this->tanggal,
        ]);

        $query->andFilterWhere(['ilike', 'status', $this->status])
            ->andFilterWhere(['ilike', 'snapshot', $this->snapshot])
            ->andFilterWhere(['ilike', 'alasan', $this->alasan])
            ->andFilterWhere(['ilike', 'kamera', $this->kamera])
            ->andFilterWhere(['ilike', 'lokasi', $this->lokasi]);

        return $dataProvider;
    }
}
