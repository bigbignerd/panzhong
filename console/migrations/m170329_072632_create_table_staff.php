<?php

use yii\db\Migration;
use yii\db\Schema;

class m170329_072632_create_table_staff extends Migration
{
    /**
     * 创建员工信息表
     * @author bignerd
     * @since  2017-03-29T15:40:15+0800
     * @return [type]
     */
    public function up()
    {
        $this->createTable('pz_staff', [
            'id' => $this->primaryKey(),
            'companyId' => Schema::TYPE_INTEGER." NOT NULL DEFAULT 0 COMMENT '子公司'",
            'deptId' => Schema::TYPE_INTEGER." NOT NULL DEFAULT 0 COMMENT '所属部门'",
            'positionId' => Schema::TYPE_INTEGER." NOT NULL DEFAULT 0 COMMENT '职位'",
            'name' => Schema::TYPE_STRING."(300) NOT NULL COMMENT '姓名'",
            'phone' => Schema::TYPE_STRING."(20) COMMENT '手机'",
            'telephone' => Schema::TYPE_STRING."(20) COMMENT '座机'",
            'email' => Schema::TYPE_STRING."(60) COMMENT '邮箱'",
            'qq' => Schema::TYPE_INTEGER."(18) COMMENT 'QQ'",
            'address' => Schema::TYPE_STRING."(300) COMMENT '联系地址'",
            'joinTime' => Schema::TYPE_INTEGER." NOT NULL COMMENT '入职时间'",
            'leaveTime' => Schema::TYPE_INTEGER." COMMENT '离职时间'",
            'leaveDesc' => Schema::TYPE_TEXT." COMMENT '离职描述'",
            'status' => Schema::TYPE_SMALLINT."(2) DEFAULT 1 COMMENT '1位在职0为离职'",
        ]);
    }

    public function down()
    {
        $this->dropTable('pz_staff');

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
