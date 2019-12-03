<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "link_view".
 *
 * @property int $id
 * @property int $link_id
 * @property string $date_time
 * @property int $ip4
 * @property int $is_guest Гость?
 *
 * @property Link $link
 */
class LinkView extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'link_view';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['link_id', 'date_time', 'ip4'], 'required'],
            [['link_id', 'ip4', 'is_guest'], 'integer'],
            [['date_time'], 'safe'],
            [['link_id'], 'exist', 'skipOnError' => true, 'targetClass' => Link::className(), 'targetAttribute' => ['link_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'link_id' => Yii::t('app', 'Link ID'),
            'date_time' => Yii::t('app', 'Date Time'),
            'ip4' => Yii::t('app', 'Ip4'),
            'is_guest' => Yii::t('app', 'Гость?'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLink()
    {
        return $this->hasOne(Link::className(), ['id' => 'link_id']);
    }

    /**
     * {@inheritdoc}
     * @return LinkViewQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LinkViewQuery(get_called_class());
    }
}
