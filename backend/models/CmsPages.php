<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cms_pages".
 *
 * @property int $CmsPageID
 * @property int $CmsPageTypeID
 * @property string $Name
 * @property string $MetaTitle
 * @property string $MetaKeyword
 * @property string $MetaDescription
 * @property string $Content
 * @property int $CreatedByID
 * @property string $DateCreated
 */
class CmsPages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cms_pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CmsPageTypeID', 'Name', 'Content'], 'required'],
            [['CmsPageTypeID', 'CreatedByID'], 'integer'],
            [['Content'], 'string'],
            [['DateCreated'], 'safe'],
            [['Name', 'MetaTitle', 'MetaKeyword', 'MetaDescription'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CmsPageID' => Yii::t('app', 'Cms Page ID'),
            'CmsPageTypeID' => Yii::t('app', 'Cms Page Type ID'),
            'Name' => Yii::t('app', 'Name'),
            'MetaTitle' => Yii::t('app', 'Meta Title'),
            'MetaKeyword' => Yii::t('app', 'Meta Keyword'),
            'MetaDescription' => Yii::t('app', 'Meta Description'),
            'Content' => Yii::t('app', 'Content'),
            'CreatedByID' => Yii::t('app', 'Created By ID'),
            'DateCreated' => Yii::t('app', 'Date Created'),
        ];
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'cmsPageTypes' => array(self::HAS_MANY, 'CmsPageTypes', 'CmsPageTypeID'),
        );
    }

    /**
     * @inheritdoc
     * @return CmsPagesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CmsPagesQuery(get_called_class());
    }
}
