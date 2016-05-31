<?php

namespace app\controllers;

use Yii;
use app\models\Mantenimientos;
use app\models\searchmodels\MantenimientosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MantenimientosController implements the CRUD actions for Mantenimientos model.
 */
use app\models\Camiones;
use app\models\Proveedores;
use app\models\Tipomanten;

class MantenimientosController extends Controller
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
     * Lists all Mantenimientos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MantenimientosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Mantenimientos model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);

		$camionesModel = new Camiones();
        $camiones = $camionesModel->find()->all();	
				
		$proveedoresModel = new Proveedores();
        $proveedores = $proveedoresModel->find()->all();	

		$tipomantenModel = new Tipomanten();
        $tipomanten = $tipomanten->find()->all();			

		$model->fecha = $model->formattedFecha;	

		return $this->render('view', [
				'model' => $model,
				'camiones' => $camiones,
				'proveedores' => $proveedores,
				'tipomanten' => $tipomanten,
			]);
    }

    /**
     * Creates a new Mantenimientos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Mantenimientos();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Mantenimientos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Mantenimientos model.
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
     * Finds the Mantenimientos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Mantenimientos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Mantenimientos::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
