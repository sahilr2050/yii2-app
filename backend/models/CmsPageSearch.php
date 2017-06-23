<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CmsPages;

/**
 * CmsPageSearch represents the model behind the search form of `app\models\CmsPages`.
 */
class CmsPageSearch extends CmsPages
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CmsPageID', 'CmsPageTypeID', 'CreatedByID'], 'integer'],
            [['Name', 'MetaTitle', 'MetaKeyword', 'MetaDescription', 'Content', 'DateCreated'], 'safe'],
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
        $query = CmsPages::find();

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
            'CmsPageID' => $this->CmsPageID,
            'CmsPageTypeID' => $this->CmsPageTypeID,
            'CreatedByID' => $this->CreatedByID,
            'DateCreated' => $this->DateCreated,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'MetaTitle', $this->MetaTitle])
            ->andFilterWhere(['like', 'MetaKeyword', $this->MetaKeyword])
            ->andFilterWhere(['like', 'MetaDescription', $this->MetaDescription])
            ->andFilterWhere(['like', 'Content', $this->Content]);

        return $dataProvider;
    }
}
