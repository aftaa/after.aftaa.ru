<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bank_card".
 *
 * @property int $id №
 * @property string $bank_name Банк
 * @property string $card_no Номер карты
 * @property int $sort Сортировка
 */
class BankCard extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bank_card';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bank_name', 'card_no', 'sort'], 'required'],
            [['sort'], 'integer'],
            [['bank_name'], 'string', 'max' => 50],
            [['card_no'], 'string', 'max' => 16],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', '№'),
            'bank_name' => Yii::t('app', 'Банк'),
            'card_no' => Yii::t('app', 'Номер карты'),
            'sort' => Yii::t('app', 'Сортировка'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return BankCardQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BankCardQuery(get_called_class());
    }
}
