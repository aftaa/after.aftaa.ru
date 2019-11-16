<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[BankCard]].
 *
 * @see BankCard
 */
class BankCardQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return BankCard[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return BankCard|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
