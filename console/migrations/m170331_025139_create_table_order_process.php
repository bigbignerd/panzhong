<?php

use yii\db\Migration;
use yii\db\Schema;

class m170331_025139_create_table_order_process extends Migration
{
    public function up()
    {
        $this->createTable('pz_order_process', [
            'id' => $this->primaryKey(),
            'orderId' => Schema::TYPE_STRING."(60) NOT NULL COMMENT '订单ID'",
            'desc' => Schema::TYPE_STRING."(255) COMMENT '订单描述'",
            'money'  => Schema::TYPE_DECIMAL."(12,2) NOT NULL COMMENT '金额'",
            'type' => Schema::TYPE_SMALLINT."(2) NOT NULL DEFAULT 1 COMMENT '1：付款2：回款'",
            'created_at' => Schema::TYPE_INTEGER,
            'updated_at' => Schema::TYPE_INTEGER, 
        ]);
    }

    public function down()
    {
        $this->dropTable('pz_order_process');

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
