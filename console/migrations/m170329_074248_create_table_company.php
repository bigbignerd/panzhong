<?php

use yii\db\Migration;
use yii\db\Schema;

class m170329_074248_create_table_company extends Migration
{
    public function up()
    {
        $this->createTable('pz_company', [
            'id' => $this->primaryKey(),
            'name' => Schema::TYPE_STRING."(300) NOT NULL COMMENT '子公司名称'",
            'remark'=> Schema::TYPE_TEXT." COMMENT '备注'",
            'created_at' => Schema::TYPE_INTEGER,
            'updated_at' => Schema::TYPE_INTEGER,
        ]);
    }

    public function down()
    {
        $this->dropTable('pz_company');

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
