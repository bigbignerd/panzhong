<?php

use yii\db\Migration;
use yii\db\Schema;

class m170329_083303_create_table_department extends Migration
{
    public function up()
    {
        $this->createTable('pz_department', [
            'id' => $this->primaryKey(),
            'name' => Schema::TYPE_STRING."(300) NOT NULL COMMENT '部门名称'",
            'companyId' => Schema::TYPE_INTEGER." DEFAULT 0 COMMENT '所属子公司'",
            'remark'=> Schema::TYPE_TEXT." COMMENT '备注'",
            'created_at' => Schema::TYPE_INTEGER,
            'updated_at' => Schema::TYPE_INTEGER,
        ]);
    }

    public function down()
    {
        $this->dropTable('pz_department');
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
