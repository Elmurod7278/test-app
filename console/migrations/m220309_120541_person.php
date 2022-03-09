<?php

use yii\db\Migration;

/**
 * Class m220309_120541_person
 */
class m220309_120541_person extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('person','updated_at',$this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220309_120541_person cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220309_120541_person cannot be reverted.\n";

        return false;
    }
    */
}
