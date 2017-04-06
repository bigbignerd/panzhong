<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pz_order_process".
 *
 * @property integer $id
 * @property string $orderId
 * @property string $desc
 * @property string $money
 * @property integer $type
 * @property integer $created_at
 * @property integer $updated_at
 */
class PzOrderProcess extends \backend\models\PzBase
{
    /** @var  订单名称 */
    public $orderName;
    /** @var  为订单添加过程，类型为收入还是支出 */
    public $typeMap = ['1'=>'支出','2'=>'收入'];
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pz_order_process';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['orderId', 'money'], 'required'],
            [['money'], 'number'],
            [['type', 'created_at', 'updated_at'], 'integer'],
            [['orderId'], 'string', 'max' => 60],
            [['desc'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'orderId' => '订单ID',
            'desc' => '描述',
            'money' => '金额',
            'type' => '类型',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'orderName' => '订单名称',
        ];
    }
    /**
     * 根据订单ID获取订单名
     * @author bignerd
     * @since  2017-04-06T17:11:13+0800
     * @param  $orderId
     */
    public function orderName($orderId)
    {
        $data = \backend\models\PzOrder::findOne($orderId);
        return $data->name;
    }
}
