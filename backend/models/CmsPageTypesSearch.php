<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CmsPageTypes;

/**
 * CmsPageTypesSearch represents the model behind the search form of `app\models\CmsPageTypes`.
 */
class CmsPageTypesSearch extends CmsPageTypes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CmsPageTypeID', 'CreatedByID'], 'integer'],
            [['Name', 'DateCreated'], 'safe'],
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
        $query = CmsPageTypes::find();

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
            'CmsPageTypeID' => $this->CmsPageTypeID,
            'CreatedByID' => $this->CreatedByID,
            'DateCreated' => $this->DateCreated,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name]);

        return $dataProvider;
    }
}
