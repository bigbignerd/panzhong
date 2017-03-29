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
            [['name', 'joinTime'], 'required'],
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
            'companyId' => 'Company ID',
            'deptId' => 'Dept ID',
            'positionId' => 'Position ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'telephone' => 'Telephone',
            'email' => 'Email',
            'qq' => 'Qq',
            'address' => 'Address',
            'joinTime' => 'Join Time',
            'leaveTime' => 'Leave Time',
            'leaveDesc' => 'Leave Desc',
            'status' => 'Status',
        ];
    }
}
