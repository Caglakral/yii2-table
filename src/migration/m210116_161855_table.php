<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210116_161855_table
 */
class m210116_161855_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('table', [
            'id' => Schema::TYPE_PK,
            'name'=> Schema::TYPE_STRING,
            'email' => Schema::TYPE_STRING,
            'contact' => Schema::TYPE_TEXT,
            'created_at' => Schema::TYPE_DATETIME,
            'updated_at' => Schema::TYPE_DATETIME
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('table');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210116_161855_table cannot be reverted.\n";

        return false;
    }
    */
}
