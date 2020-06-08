<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m200608_000141_user
 */
class m200608_000141_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user',[
            'user_id'=>Schema::TYPE_PK,
            'user_code'=>Schema::TYPE_INTEGER . ' NOT NULL',
            'login'=>$this->string()->notNull(),
            'password'=>Schema::TYPE_STRING . ' NOT NULL',
        ]);
        $this->createIndex('idx-post-user_code', 'user', 'user_code');
        $this->addForeignKey('fk-post-user_id', 'reviews', 'user_id', 'user', 'user_id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200608_000141_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200608_000141_user cannot be reverted.\n";

        return false;
    }
    */
}