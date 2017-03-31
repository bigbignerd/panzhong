<?php

use yii\db\Migration;
use yii\db\Schema;

class m170331_033455_alter_order extends Migration
{
    public function up()
    {
        $this->alterColumn('pz_order', 'sum',  Schema::TYPE_DECIMAL."(12,2) COMMENT '结算金额'");
    }

    public function down()
    {
        $this->alterColumn('pz_order', 'sum',  Schema::TYPE_DECIMAL."(12,2) NOT NULL COMMENT '结算金额'");
        return true;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
