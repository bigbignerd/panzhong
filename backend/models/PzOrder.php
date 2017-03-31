<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pz_order".
 *
 * @property integer $id
 * @property string $name
 * @property string $salesman
 * @property string $deposit
 * @property string $sum
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $start_at
 * @property integer $end_at
 * @property string $remark
 */
class PzOrder extends \backend\models\PzBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pz_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'salesman', 'deposit'], 'required'],
            [['deposit', 'sum'], 'number'],
            [['status', 'created_at', 'updated_at', 'start_at', 'end_at'], 'integer'],
            [['remark'], 'string'],
            [['name'], 'string', 'max' => 300],
            [['salesman'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '订单名称',
            'salesman' => '负责人',
            'deposit' => '定金',
            'sum' => '结算金额',
            'status' => '状态',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'start_at' => '开始时间',
            'end_at' => '结束时间',
            'remark' => '备注',
        ];
    }
}
