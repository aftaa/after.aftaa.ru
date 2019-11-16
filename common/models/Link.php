<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "link".
 *
 * @property int $id
 * @property int $link_block_id
 * @property string $name
 * @property string $href
 * @property int $private
 * @property string $icon
 *
 * @property LinkBlock $linkBlock
 * @property LinkView[] $linkViews
 */
class Link extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'link';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['link_block_id', 'private'], 'integer'],
            [['name', 'href', 'icon'], 'required'],
            [['name'], 'string', 'max' => 50],
            [['href'], 'string', 'max' => 150],
            [['icon'], 'string', 'max' => 100],
            [['link_block_id'], 'exist', 'skipOnError' => true, 'targetClass' => LinkBlock::className(), 'targetAttribute' => ['link_block_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'link_block_id' => Yii::t('app', 'Link Block ID'),
            'name' => Yii::t('app', 'Name'),
            'href' => Yii::t('app', 'Href'),
            'private' => Yii::t('app', 'Private'),
            'icon' => Yii::t('app', 'Icon'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLinkBlock()
    {
        return $this->hasOne(LinkBlock::className(), ['id' => 'link_block_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLinkViews()
    {
        return $this->hasMany(LinkView::className(), ['link_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return LinkQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LinkQuery(get_called_class());
    }
}
