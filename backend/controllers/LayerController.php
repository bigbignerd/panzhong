<?php

namespace backend\controllers;
use Yii;
use backend\models\PzStaffSearch;


class LayerController extends \backend\controllers\CommonController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionStaff()
    {
    	$this->layout = 'blank';
    	$searchModel = new PzStaffSearch();
        $model = new \backend\models\PzStaff();

        // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $name  = Yii::$app->request->get("name");
        $data  = $model->getStructure($name);
        $model = $this->initDropdownData($model);
        $header = ['id'=>'#','name'=>'姓名','companyId'=>'子公司名称','deptId'=>'部门','positionId'=>'职位'];
        return $this->render('staff', [
        	'model' => $model,
        	'data'  => $data,
        	'header' => $header,
        ]);
    }

}
