<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[CmsPageTypes]].
 *
 * @see CmsPageTypes
 */
class CmsPageTypesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return CmsPageTypes[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CmsPageTypes|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
