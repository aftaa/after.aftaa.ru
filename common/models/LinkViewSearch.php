<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\LinkView;

/**
 * LinkViewSearch represents the model behind the search form of `common\models\LinkView`.
 */
class LinkViewSearch extends LinkView
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'link_id', 'ip4', 'is_guest'], 'integer'],
            [['date_time'], 'safe'],
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
        $query = LinkView::find();

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
            'link_id' => $this->link_id,
            'date_time' => $this->date_time,
            'ip4' => $this->ip4,
            'is_guest' => $this->is_guest,
        ]);

        return $dataProvider;
    }
}
