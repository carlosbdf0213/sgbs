<?php

namespace app\controllers;

use Yii;
use app\models\Bancos;
use app\models\searchmodels\BancosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BancosController implements the CRUD actions for Bancos model.
 */
use app\models\Provincias;
 
class BancosController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Bancos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BancosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
		$provinciasModel = new Provincias();
        $provincias = $provinciasModel->find()->all();
		
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'provincias' => $provincias,
        ]);
    }

    /**
     * Displays a single Bancos model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
		
		$provinciasModel = new Provincias();
        $provincias = $provinciasModel->find()->all();

        return $this->render('view', [
            'model' => $this->findModel($id),
			'provincias' => $provincias,
        ]);
    }

    /**
     * Creates a new Bancos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Bancos();

		$provinciasModel = new Provincias();
        $provincias = $provinciasModel->find()->all();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
				'provincias' => $provincias,
            ]);
        }
    }

    /**
     * Updates an existing Bancos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

		$provinciasModel = new Provincias();
        $provincias = $provinciasModel->find()->all();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
       			'provincias' => $provincias,
			]);
        }
    }

    /**
     * Deletes an existing Bancos model.
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
     * Finds the Bancos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Bancos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Bancos::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
