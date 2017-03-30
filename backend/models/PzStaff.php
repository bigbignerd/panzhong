<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pz_staff".
 *
 * @property integer $id
 * @property integer $companyId
 * @property integer $deptId
 * @property integer $positionId
 * @property string $name
 * @property string $phone
 * @property string $telephone
 * @property string $email
 * @property integer $qq
 * @property string $address
 * @property integer $joinTime
 * @property integer $leaveTime
 * @property string $leaveDesc
 * @property integer $status
 */
class PzStaff extends \backend\models\PzBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pz_staff';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['companyId', 'deptId', 'positionId', 'qq', 'joinTime', 'leaveTime', 'status'], 'integer'],
            [['name', 'joinTime','companyId', 'deptId', 'positionId'], 'required'],
            [['leaveDesc'], 'string'],
            [['name', 'address'], 'string', 'max' => 300],
            [['phone', 'telephone'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'companyId' => '所属子公司',
            'deptId' => '部门',
            'positionId' => '职位',
            'name' => '姓名',
            'phone' => '手机',
            'telephone' => '座机',
            'email' => 'Email',
            'qq' => 'QQ',
            'address' => '联系地址',
            'joinTime' => '入职时间',
            'leaveTime' => '离职时间',
            'leaveDesc' => '离职描述',
            'status' => '状态',
        ];
    }
    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert)){
            if(!empty($this->joinTime))  $this->joinTime = strtotime($this->joinTime);
            if(!empty($this->leaveTime)) $this->leaveTime= strtotime($this->leaveTime);
        }
        return true;
    }
}   
