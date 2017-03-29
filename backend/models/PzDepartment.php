<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pz_department".
 *
 * @property integer $id
 * @property string $name
 * @property integer $companyId
 * @property string $remark
 * @property integer $created_at
 * @property integer $updated_at
 */
class PzDepartment extends \backend\models\PzBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pz_department';
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
            'name' => 'Name',
            'companyId' => 'Company ID',
            'remark' => 'Remark',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
