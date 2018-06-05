<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DataUnit;

/**
 * SearchDataUnit represents the model behind the search form of `app\models\DataUnit`.
 */
class SearchDataUnit extends DataUnit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_unit', 'nama_unit', 'induk_unit'], 'safe'],
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
        $query = DataUnit::find();

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
        $query->andFilterWhere(['like', 'id_unit', $this->id_unit])
            ->andFilterWhere(['like', 'nama_unit', $this->nama_unit])
            ->andFilterWhere(['like', 'induk_unit', $this->induk_unit]);

        return $dataProvider;
    }
}
