<?php

use yii\db\Migration;
use yii\db\Schema;

class m170329_083906_create_table_position extends Migration
{
    public function up()
    {
        $this->createTable('pz_position', [
            'id' => $this->primaryKey(),
            'name' => Schema::TYPE_STRING."(300) NOT NULL COMMENT '职位名称'",
            'companyId' => Schema::TYPE_INTEGER." DEFAULT 0 COMMENT '所属子公司'",
            'remark'=> Schema::TYPE_TEXT." COMMENT '备注'",
            'created_at' => Schema::TYPE_INTEGER,
            'updated_at' => Schema::TYPE_INTEGER,
        ]);
    }

    public function down()
    {
        $this->dropTable('pz_position');
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
