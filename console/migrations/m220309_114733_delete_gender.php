<?php

use yii\db\Migration;

/**
 * Class m220309_114733_delete_gender
 */
class m220309_114733_delete_gender extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('person','created_at',$this->integer());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220309_114733_delete_gender cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220309_114733_delete_gender cannot be reverted.\n";

        return false;
    }
    */
}
