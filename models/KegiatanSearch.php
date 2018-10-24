<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kegiatan;

/**
 * KegiatanSearch represents the model behind the search form of `app\models\Kegiatan`.
 */
class KegiatanSearch extends Kegiatan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nama', 'waktu_mulai', 'waktu_selesai', 'kamera', 'behavior', 'lokasi', 'peserta', 'created_at'], 'safe'],
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
        $query = Kegiatan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [ 'pageSize' => 10 ],
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
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['ilike', 'nama', $this->nama])
            ->andFilterWhere(['ilike', 'waktu_mulai', $this->waktu_mulai])
            ->andFilterWhere(['ilike', 'waktu_selesai', $this->waktu_selesai])
            ->andFilterWhere(['ilike', 'kamera', $this->kamera])
            ->andFilterWhere(['ilike', 'behavior', $this->behavior])
            ->andFilterWhere(['ilike', 'lokasi', $this->lokasi])
            ->andFilterWhere(['ilike', 'peserta', $this->peserta]);

        return $dataProvider;
    }
}
