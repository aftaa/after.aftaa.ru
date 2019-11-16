<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "link_block".
 *
 * @property int $id
 * @property string $name
 *
 * @property Link[] $links
 */
class LinkBlock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'link_block';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLinks()
    {
        return $this->hasMany(Link::className(), ['link_block_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return LinkBlockQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LinkBlockQuery(get_called_class());
    }
}
