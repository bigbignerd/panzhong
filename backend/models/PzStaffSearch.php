<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PzStaff;

/**
 * PzStaffSearch represents the model behind the search form about `backend\models\PzStaff`.
 */
class PzStaffSearch extends PzStaff
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'companyId', 'deptId', 'positionId', 'qq', 'joinTime', 'leaveTime', 'status'], 'integer'],
            [['name', 'phone', 'telephone', 'email', 'address', 'leaveDesc'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = PzStaff::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'companyId' => $this->companyId,
            'deptId' => $this->deptId,
            'positionId' => $this->positionId,
            'qq' => $this->qq,
            'joinTime' => $this->joinTime,
            'leaveTime' => $this->leaveTime,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'telephone', $this->telephone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'leaveDesc', $this->leaveDesc]);

        return $dataProvider;
    }
}
