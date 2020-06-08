<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m200608_000117_reviews
 */
class m200608_000117_reviews extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('reviews',[
            'reviews_id'=>Schema::TYPE_PK,
            'user_id'=>Schema::TYPE_INTEGER . ' NOT NULL',
            'login'=>Schema::TYPE_STRING . ' NOT NULL',
            'reviews_date'=>Schema::TYPE_DATE . ' NOT NULL',
            'reviews_text'=>Schema::TYPE_STRING . ' NOT NULL',
        ]);
        $this->createIndex('idx-post-user_id', 'reviews', 'user_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200608_000117_reviews cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200608_000117_reviews cannot be reverted.\n";

        return false;
    }
    */
}
