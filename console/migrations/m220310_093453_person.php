<?php

use yii\db\Migration;

/**
 * Class m220310_093453_person
 */
class m220310_093453_person extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('person','file',$this->string()->defaultValue(null));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220310_093453_person cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220310_093453_person cannot be reverted.\n";

        return false;
    }
    */
}
