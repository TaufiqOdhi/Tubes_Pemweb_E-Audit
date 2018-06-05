<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetailPerjalanandinas;

/**
 * SearchDetailPerjalanandinas represents the model behind the search form of `app\models\DetailPerjalanandinas`.
 */
class SearchDetailPerjalanandinas extends DetailPerjalanandinas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_detail', 'id_master', 'harga_total', 'best_fare'], 'integer'],
            [['nama_maskapai', 'nomor_tiket', 'flight_number', 'origin', 'ticket_class', 'destination', 'status_audit', 'tanggal_keberangkatan', 'keterangan_audit'], 'safe'],
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
        $query = DetailPerjalanandinas::find();

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
            'id_detail' => $this->id_detail,
            'id_master' => $this->id_master,
            'harga_total' => $this->harga_total,
            'best_fare' => $this->best_fare,
            'tanggal_keberangkatan' => $this->tanggal_keberangkatan,
        ]);

        $query->andFilterWhere(['like', 'nama_maskapai', $this->nama_maskapai])
            ->andFilterWhere(['like', 'nomor_tiket', $this->nomor_tiket])
            ->andFilterWhere(['like', 'flight_number', $this->flight_number])
            ->andFilterWhere(['like', 'origin', $this->origin])
            ->andFilterWhere(['like', 'ticket_class', $this->ticket_class])
            ->andFilterWhere(['like', 'destination', $this->destination])
            ->andFilterWhere(['like', 'status_audit', $this->status_audit])
            ->andFilterWhere(['like', 'keterangan_audit', $this->keterangan_audit]);

        return $dataProvider;
    }
}
