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
            'orderId' => 'Order ID',
            'desc' => 'Desc',
            'money' => 'Money',
            'type' => 'Type',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
