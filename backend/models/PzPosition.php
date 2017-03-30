<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pz_position".
 *
 * @property integer $id
 * @property string $name
 * @property integer $companyId
 * @property string $remark
 * @property integer $created_at
 * @property integer $updated_at
 */
class PzPosition extends \backend\models\PzBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pz_position';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['companyId', 'created_at', 'updated_at'], 'integer'],
            [['remark'], 'string'],
            [['name'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '职位名称',
            'companyId' => '所属子公司',
            'remark' => '备注',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
