<?php

namespace backend\controllers;

use Yii;
use backend\models\PzStaff;
use backend\models\PzStaffSearch;
use backend\controllers\CommonController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StaffController implements the CRUD actions for PzStaff model.
 */
class StaffController extends CommonController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all PzStaff models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PzStaffSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $searchModel = $this->initDropdownData($searchModel);
        
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PzStaff model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new PzStaff model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PzStaff();
        $model = $this->initDropdownData($model);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PzStaff model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PzStaff model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PzStaff model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PzStaff the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PzStaff::findOne($id)) !== null) {
            $model = $this->initDropdownData($model);
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    protected function initDropdownData($model)
    {
        $model = $this->initListMap($model);
        $model = $this->initDeptListMap($model);
        $model = $this->initPosListMap($model);

        return $model;
    }
}
