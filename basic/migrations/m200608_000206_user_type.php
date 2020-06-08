<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m200608_000206_user_type
 */
class m200608_000206_user_type extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user_type',[
        'user_code'=>Schema::TYPE_PK,
        'name_code'=>Schema::TYPE_STRING . ' NOT NULL',
        ]);

        $this->createIndex('idx-post-user_code', 'user_type', 'user_code');
        $this->addForeignKey('fk-post-user_code', 'user_type', 'user_code','user','user_code', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200608_000206_user_type cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200608_000206_user_type cannot be reverted.\n";

        return false;
    }
    */
}
