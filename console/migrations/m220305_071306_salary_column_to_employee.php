<?php

use yii\db\Migration;

/**
 * Class m220305_071306_salary_column_to_employee
 */
class m220305_071306_salary_column_to_employee extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->addColumn('employee', 'salary',$this->double());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('employee', 'salary');
    }

}
