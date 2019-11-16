<?php

use common\models\User;
use yii\db\Migration;

/**
 * Class m191116_001856_add_root_to_user_table
 */
class m191116_001856_add_root_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $user = new User();
        $user->username = 'root';
        $user->setPassword('darkside423');
        $user->generateAuthKey();
        $user->status = User::STATUS_ACTIVE;
        $user->email = 'after@ya.ru';
        $user->save();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        User::deleteAll(['username' => 'root']);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191116_001856_add_root_to_user_table cannot be reverted.\n";

        return false;
    }
    */
}
