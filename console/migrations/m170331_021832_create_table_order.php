<?php

use yii\db\Migration;
use yii\db\Schema;

class m170331_021832_create_table_order extends Migration
{
    public function up()
    {
        $this->createTable('pz_order', [
            'id' => $this->primaryKey(),
            'name' => Schema::TYPE_STRING."(300) NOT NULL COMMENT '订单名称'",
            'salesman' => Schema::TYPE_STRING."(255) NOT NULL COMMENT '负责人'",
            'deposit'  => Schema::TYPE_DECIMAL."(12,2) NOT NULL COMMENT '定金金额'",
            'sum'  => Schema::TYPE_DECIMAL."(12,2) NOT NULL COMMENT '结算金额'",
            'status' => Schema::TYPE_SMALLINT."(2) NOT NULL DEFAULT 0 COMMENT '订单状态'",
            'created_at' => Schema::TYPE_INTEGER,
            'updated_at' => Schema::TYPE_INTEGER, 
            'start_at' => Schema::TYPE_INTEGER,
            'end_at' => Schema::TYPE_INTEGER,
            'remark' => Schema::TYPE_TEXT." COMMENT '备注'",
        ]);
    }

    public function down()
    {
        $this->dropTable('pz_order');

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
