<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetailTax;

/**
 * SearchDetailTax represents the model behind the search form of `app\models\DetailTax`.
 */
class SearchDetailTax extends DetailTax
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_detail', 'id_master', 'NIP', 'penghasilan', 'pajak'], 'integer'],
            [['golongan', 'tanggal_penerimaanpenghasilan', 'status_audit'], 'safe'],
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
        $query = DetailTax::find();

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
            'NIP' => $this->NIP,
            'penghasilan' => $this->penghasilan,
            'pajak' => $this->pajak,
            'tanggal_penerimaanpenghasilan' => $this->tanggal_penerimaanpenghasilan,
        ]);

        $query->andFilterWhere(['like', 'golongan', $this->golongan])
            ->andFilterWhere(['like', 'status_audit', $this->status_audit]);

        return $dataProvider;
    }
}
