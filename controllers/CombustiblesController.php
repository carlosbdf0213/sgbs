<?php

namespace app\controllers;

use Yii;
use app\models\Combustibles;
use app\models\searchmodels\CombustiblesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CombustiblesController implements the CRUD actions for Combustibles model.
 */
use app\models\Camiones;
use app\models\Choferes;
use app\models\Proveedores;

class CombustiblesController extends Controller
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
     * Lists all Combustibles models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CombustiblesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
		$camionesModel = new Camiones();
        $camiones = $camionesModel->find()->all();	
				
		$proveedoresModel = new Proveedores();
        $proveedores = $proveedoresModel->find()->all();	
		
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'camiones' => $camiones,
			'proveedores' => $proveedores,
		]);
    }

    /**
     * Displays a single Combustibles model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
		
		$model->fecha = $model->formattedFecha;	
		
		$camionesModel = new Camiones();
        $camiones = $camionesModel->find()->all();	
				
		$choferesModel = new Choferes();
        $choferes = $choferesModel->find()->all();	

		$proveedoresModel = new Proveedores();
        $proveedores = $proveedoresModel->find()->all();
		
        return $this->render('view', [
            'model' => $model,
			'camiones' => $camiones,
			'choferes' => $choferes,
			'proveedores' => $proveedores,
        ]);
    }

    /**
     * Creates a new Combustibles model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Combustibles();
		
		$camionesModel = new Camiones();
        $camiones = $camionesModel->find()->all();	
				
		$proveedoresModel = new Proveedores();
        $proveedores = $proveedoresModel->find()->all();

		$model->fecha = $model->formattedFecha;	
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
				'camiones' => $camiones,
				'proveedores' => $proveedores,
           ]);
        }
    }

    /**
     * Updates an existing Combustibles model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
		
		$camionesModel = new Camiones();
        $camiones = $camionesModel->find()->all();	
				
		$proveedoresModel = new Proveedores();
        $proveedores = $proveedoresModel->find()->all();

		$model->fecha = $model->formattedFecha;	
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
				'camiones' => $camiones,
				'proveedores' => $proveedores,
            ]);
        }
    }

    /**
     * Deletes an existing Combustibles model.
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
     * Finds the Combustibles model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Combustibles the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Combustibles::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
