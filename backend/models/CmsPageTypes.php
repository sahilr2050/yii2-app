<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cms_page_types".
 *
 * @property int $CmsPageTypeID
 * @property string $Name
 * @property int $CreatedByID
 * @property string $DateCreated
 */
class CmsPageTypes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cms_page_types';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name'], 'required'],
            [['CreatedByID'], 'integer'],
            [['DateCreated'], 'safe'],
            [['Name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CmsPageTypeID' => Yii::t('app', 'Cms Page Type ID'),
            'Name' => Yii::t('app', 'Name'),
            'CreatedByID' => Yii::t('app', 'Created By ID'),
            'DateCreated' => Yii::t('app', 'Date Created'),
        ];
    }

    /**
     * @inheritdoc
     * @return CmsPageTypesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CmsPageTypesQuery(get_called_class());
    }
}
