<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pz_company".
 *
 * @property integer $id
 * @property string $name
 * @property string $remark
 * @property integer $created_at
 * @property integer $updated_at
 */
class PzCompany extends \backend\models\PzBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pz_company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required','message'=>'公司名称不能为空'],
            [['remark'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
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
            'name' => '子公司名',
            'remark' => '备注',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }    
}
